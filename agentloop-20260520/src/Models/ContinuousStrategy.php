<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class ContinuousStrategy extends Model
{
    /**
     * @var int
     */
    public $dataDelayMinutes;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $intervalUnit;

    /**
     * @var int
     */
    public $intervalValue;
    protected $_name = [
        'dataDelayMinutes' => 'dataDelayMinutes',
        'enabled' => 'enabled',
        'intervalUnit' => 'intervalUnit',
        'intervalValue' => 'intervalValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDelayMinutes) {
            $res['dataDelayMinutes'] = $this->dataDelayMinutes;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->intervalUnit) {
            $res['intervalUnit'] = $this->intervalUnit;
        }

        if (null !== $this->intervalValue) {
            $res['intervalValue'] = $this->intervalValue;
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
        if (isset($map['dataDelayMinutes'])) {
            $model->dataDelayMinutes = $map['dataDelayMinutes'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['intervalUnit'])) {
            $model->intervalUnit = $map['intervalUnit'];
        }

        if (isset($map['intervalValue'])) {
            $model->intervalValue = $map['intervalValue'];
        }

        return $model;
    }
}
