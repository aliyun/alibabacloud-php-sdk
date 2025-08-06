<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\scheduleConfSettingModel\moziConfVirtualExtraSetting;

use AlibabaCloud\Dara\Model;

class moziConfExtensionAppSettings extends Model
{
    /**
     * @var int
     */
    public $autoOpenMode;

    /**
     * @var string
     */
    public $coolAppCode;

    /**
     * @var string
     */
    public $extensionAppBizData;
    protected $_name = [
        'autoOpenMode' => 'AutoOpenMode',
        'coolAppCode' => 'CoolAppCode',
        'extensionAppBizData' => 'ExtensionAppBizData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
