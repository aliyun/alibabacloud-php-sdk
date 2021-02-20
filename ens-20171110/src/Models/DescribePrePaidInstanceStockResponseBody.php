<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribePrePaidInstanceStockResponseBody extends Model
{
    /**
     * @var int
     */
    public $avaliableCount;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $requestId;

    /**
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
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
