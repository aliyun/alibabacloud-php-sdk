<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScheduledTaskRequest;

use AlibabaCloud\Dara\Model;

class warmPoolCapacityOptions extends Model
{
    /**
     * @var int
     */
    public $desiredGroupPreparedCapacity;

    /**
     * @var int
     */
    public $minCapacity;
    protected $_name = [
        'desiredGroupPreparedCapacity' => 'DesiredGroupPreparedCapacity',
        'minCapacity' => 'MinCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desiredGroupPreparedCapacity) {
            $res['DesiredGroupPreparedCapacity'] = $this->desiredGroupPreparedCapacity;
        }

        if (null !== $this->minCapacity) {
            $res['MinCapacity'] = $this->minCapacity;
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
        if (isset($map['DesiredGroupPreparedCapacity'])) {
            $model->desiredGroupPreparedCapacity = $map['DesiredGroupPreparedCapacity'];
        }

        if (isset($map['MinCapacity'])) {
            $model->minCapacity = $map['MinCapacity'];
        }

        return $model;
    }
}
