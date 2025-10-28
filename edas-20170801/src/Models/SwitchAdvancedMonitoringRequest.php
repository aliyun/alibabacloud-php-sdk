<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class SwitchAdvancedMonitoringRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $enableAdvancedMonitoring;
    protected $_name = [
        'appId' => 'AppId',
        'enableAdvancedMonitoring' => 'EnableAdvancedMonitoring',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->enableAdvancedMonitoring) {
            $res['EnableAdvancedMonitoring'] = $this->enableAdvancedMonitoring;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['EnableAdvancedMonitoring'])) {
            $model->enableAdvancedMonitoring = $map['EnableAdvancedMonitoring'];
        }

        return $model;
    }
}
