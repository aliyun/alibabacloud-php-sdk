<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigSettingsResponseBody\configSettings;

use AlibabaCloud\Tea\Model;

class configSetting extends Model
{
    /**
     * @var string
     */
    public $optionName;

    /**
     * @var string
     */
    public $pathName;

    /**
     * @var string
     */
    public $settingValue;
    protected $_name = [
        'optionName'   => 'OptionName',
        'pathName'     => 'PathName',
        'settingValue' => 'SettingValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionName) {
            $res['OptionName'] = $this->optionName;
        }
        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }
        if (null !== $this->settingValue) {
            $res['SettingValue'] = $this->settingValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OptionName'])) {
            $model->optionName = $map['OptionName'];
        }
        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }
        if (isset($map['SettingValue'])) {
            $model->settingValue = $map['SettingValue'];
        }

        return $model;
    }
}
