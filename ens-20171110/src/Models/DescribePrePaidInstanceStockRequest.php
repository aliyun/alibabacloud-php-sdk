<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribePrePaidInstanceStockRequest extends Model
{
    /**
     * @description The ID of the datadisk.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @description The ID of the edge node.
     *
     * This parameter is required.
     * @example cn-suzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The size of the system disk. Unit: GB.
     *
     * This parameter is required.
     * @example ens.sn1.stiny
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The ID of the systemdisk
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDiskSize'   => 'DataDiskSize',
        'ensRegionId'    => 'EnsRegionId',
        'instanceSpec'   => 'InstanceSpec',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrePaidInstanceStockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
