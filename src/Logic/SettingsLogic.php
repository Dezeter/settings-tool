<?php


namespace Astreya\SettingsTool\Logic;
use DB;

class SettingsLogic
{
    public function manageSettings()
    {
        $settings = config('nova-settings-tool.settings');
        $tableName = config('nova-settings-tool.table_name');
        $extractedKeys = [];

        foreach ($settings as $key => $setting) {
            $extractedKeys[] = $setting['key'];
            if (array_key_exists('options', $setting)) {
                $setting['options'] = json_encode($setting['options']);
            }
            DB::table($tableName)->updateOrInsert(['key' => $setting['key']], $setting);
        }

        DB::table($tableName)->whereNotIn('key', $extractedKeys)->delete();
        return $settings;
    }

}
