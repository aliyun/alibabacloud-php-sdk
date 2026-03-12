<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeConfigHistoryResponseBody\data;

use AlibabaCloud\Dara\Model;

class configMementos extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $after;

    /**
     * @var string
     */
    public $before;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configType;
    protected $_name = [
        'action' => 'Action',
        'after' => 'After',
        'before' => 'Before',
        'configKey' => 'ConfigKey',
        'configType' => 'ConfigType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->after) {
            $res['After'] = $this->after;
        }

        if (null !== $this->before) {
            $res['Before'] = $this->before;
        }

        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['After'])) {
            $model->after = $map['After'];
        }

        if (isset($map['Before'])) {
            $model->before = $map['Before'];
        }

        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        return $model;
    }
}
