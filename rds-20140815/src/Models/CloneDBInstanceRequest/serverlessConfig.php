<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceRequest;

use AlibabaCloud\Dara\Model;

class serverlessConfig extends Model
{
    /**
     * @var bool
     */
    public $autoPause;
    /**
     * @var float
     */
    public $maxCapacity;
    /**
     * @var float
     */
    public $minCapacity;
    /**
     * @var bool
     */
    public $switchForce;
    protected $_name = [
        'autoPause'   => 'AutoPause',
        'maxCapacity' => 'MaxCapacity',
        'minCapacity' => 'MinCapacity',
        'switchForce' => 'SwitchForce',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPause) {
            $res['AutoPause'] = $this->autoPause;
        }

        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }

        if (null !== $this->minCapacity) {
            $res['MinCapacity'] = $this->minCapacity;
        }

        if (null !== $this->switchForce) {
            $res['SwitchForce'] = $this->switchForce;
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
        if (isset($map['AutoPause'])) {
            $model->autoPause = $map['AutoPause'];
        }

        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }

        if (isset($map['MinCapacity'])) {
            $model->minCapacity = $map['MinCapacity'];
        }

        if (isset($map['SwitchForce'])) {
            $model->switchForce = $map['SwitchForce'];
        }

        return $model;
    }
}
