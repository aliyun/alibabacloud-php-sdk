<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class AddOrQuitLaneCmd extends Model
{
    /**
     * @var string
     */
    public $laneIds;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'laneIds' => 'laneIds',
        'operateType' => 'operateType',
        'serviceGroupId' => 'serviceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->laneIds) {
            $res['laneIds'] = $this->laneIds;
        }

        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
        }

        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
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
        if (isset($map['laneIds'])) {
            $model->laneIds = $map['laneIds'];
        }

        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }

        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
