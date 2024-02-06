<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribePrePaidInstanceStockResponseBody extends Model
{
    /**
     * @description The number of resources that you can purchase.
     *
     * @example 84
     *
     * @var int
     */
    public $avaliableCount;

    /**
     * @description The number of vCPUs.
     *
     * @example 1
     *
     * @var int
     */
    public $cores;

    /**
     * @description The size of the data disk.
     *
     * @example 20
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @description The ID of the node.
     *
     * @example cn-suzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The instance type.
     *
     * @example ens.sn1.stiny
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 2048
     *
     * @var int
     */
    public $memory;

    /**
     * @description The ID of the request.
     *
     * @example 007833C8-E819-4122-B636-0D48D7BF6DFB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The reasons for resource scarcity
     *
     * @example StockNotEnough
     *
     * @var string
     */
    public $resourceGap;

    /**
     * @description The size of the system disk. Unit: GB.
     *
     * @example 20
     *
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'avaliableCount' => 'AvaliableCount',
        'cores'          => 'Cores',
        'dataDiskSize'   => 'DataDiskSize',
        'ensRegionId'    => 'EnsRegionId',
        'instanceSpec'   => 'InstanceSpec',
        'memory'         => 'Memory',
        'requestId'      => 'RequestId',
        'resourceGap'    => 'ResourceGap',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avaliableCount) {
            $res['AvaliableCount'] = $this->avaliableCount;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGap) {
            $res['ResourceGap'] = $this->resourceGap;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrePaidInstanceStockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvaliableCount'])) {
            $model->avaliableCount = $map['AvaliableCount'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGap'])) {
            $model->resourceGap = $map['ResourceGap'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
