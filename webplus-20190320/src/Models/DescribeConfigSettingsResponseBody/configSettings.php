<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigSettingsResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigSettingsResponseBody\configSettings\configSetting;
use AlibabaCloud\Tea\Model;

class configSettings extends Model
{
    /**
     * @var configSetting[]
     */
    public $configSetting;
    protected $_name = [
        'configSetting' => 'ConfigSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configSetting) {
            $res['ConfigSetting'] = [];
            if (null !== $this->configSetting && \is_array($this->configSetting)) {
                $n = 0;
                foreach ($this->configSetting as $item) {
                    $res['ConfigSetting'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigSetting'])) {
            if (!empty($map['ConfigSetting'])) {
                $model->configSetting = [];
                $n                    = 0;
                foreach ($map['ConfigSetting'] as $item) {
                    $model->configSetting[$n++] = null !== $item ? configSetting::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
