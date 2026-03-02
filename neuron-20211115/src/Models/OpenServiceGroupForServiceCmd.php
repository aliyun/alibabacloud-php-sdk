<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class OpenServiceGroupForServiceCmd extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $laneId;

    /**
     * @var int[]
     */
    public $serviceIds;
    protected $_name = [
        'companyId' => 'companyId',
        'laneId' => 'laneId',
        'serviceIds' => 'serviceIds',
    ];

    public function validate()
    {
        if (\is_array($this->serviceIds)) {
            Model::validateArray($this->serviceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->laneId) {
            $res['laneId'] = $this->laneId;
        }

        if (null !== $this->serviceIds) {
            if (\is_array($this->serviceIds)) {
                $res['serviceIds'] = [];
                $n1 = 0;
                foreach ($this->serviceIds as $item1) {
                    $res['serviceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['laneId'])) {
            $model->laneId = $map['laneId'];
        }

        if (isset($map['serviceIds'])) {
            if (!empty($map['serviceIds'])) {
                $model->serviceIds = [];
                $n1 = 0;
                foreach ($map['serviceIds'] as $item1) {
                    $model->serviceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
