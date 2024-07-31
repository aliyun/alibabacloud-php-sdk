<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnassignedMachinesResponseBody\unassignedMachines;
use AlibabaCloud\Tea\Model;

class DescribeHybridCloudUnassignedMachinesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 3EBCFCE9-4A3C-5E01-915D-691B****510A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 28
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The servers that are not assigned to the hybrid cloud cluster.
     *
     * @var unassignedMachines[]
     */
    public $unassignedMachines;
    protected $_name = [
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
        'unassignedMachines' => 'UnassignedMachines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->unassignedMachines) {
            $res['UnassignedMachines'] = [];
            if (null !== $this->unassignedMachines && \is_array($this->unassignedMachines)) {
                $n = 0;
                foreach ($this->unassignedMachines as $item) {
                    $res['UnassignedMachines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridCloudUnassignedMachinesResponseBody
     */
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
                $n                         = 0;
                foreach ($map['UnassignedMachines'] as $item) {
                    $model->unassignedMachines[$n++] = null !== $item ? unassignedMachines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
