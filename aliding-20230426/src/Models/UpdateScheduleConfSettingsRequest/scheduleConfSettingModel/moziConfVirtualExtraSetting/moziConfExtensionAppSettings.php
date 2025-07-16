<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\scheduleConfSettingModel\moziConfVirtualExtraSetting;

use AlibabaCloud\Tea\Model;

class moziConfExtensionAppSettings extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $autoOpenMode;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $coolAppCode;

    /**
     * @example xxx
     *
     * @var string
     */
    public $extensionAppBizData;
    protected $_name = [
        'autoOpenMode' => 'AutoOpenMode',
        'coolAppCode' => 'CoolAppCode',
        'extensionAppBizData' => 'ExtensionAppBizData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoOpenMode) {
            $res['AutoOpenMode'] = $this->autoOpenMode;
        }
        if (null !== $this->coolAppCode) {
            $res['CoolAppCode'] = $this->coolAppCode;
        }
        if (null !== $this->extensionAppBizData) {
            $res['ExtensionAppBizData'] = $this->extensionAppBizData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moziConfExtensionAppSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoOpenMode'])) {
            $model->autoOpenMode = $map['AutoOpenMode'];
        }
        if (isset($map['CoolAppCode'])) {
            $model->coolAppCode = $map['CoolAppCode'];
        }
        if (isset($map['ExtensionAppBizData'])) {
            $model->extensionAppBizData = $map['ExtensionAppBizData'];
        }

        return $model;
    }
}
