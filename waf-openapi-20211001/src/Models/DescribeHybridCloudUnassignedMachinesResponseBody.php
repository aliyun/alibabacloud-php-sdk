<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnassignedMachinesResponseBody\unassignedMachines;

class DescribeHybridCloudUnassignedMachinesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var unassignedMachines[]
     */
    public $unassignedMachines;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'unassignedMachines' => 'UnassignedMachines',
    ];

    public function validate()
    {
        if (\is_array($this->unassignedMachines)) {
            Model::validateArray($this->unassignedMachines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->unassignedMachines) {
            if (\is_array($this->unassignedMachines)) {
                $res['UnassignedMachines'] = [];
                $n1 = 0;
                foreach ($this->unassignedMachines as $item1) {
                    $res['UnassignedMachines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UnassignedMachines'])) {
            if (!empty($map['UnassignedMachines'])) {
                $model->unassignedMachines = [];
                $n1 = 0;
                foreach ($map['UnassignedMachines'] as $item1) {
                    $model->unassignedMachines[$n1++] = unassignedMachines::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
