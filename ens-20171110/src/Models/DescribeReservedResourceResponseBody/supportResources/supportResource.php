<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource\dataDiskSizes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource\systemDiskSizes;
use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @description The sizes of data disks.
     *
     * @var dataDiskSizes
     */
    public $dataDiskSizes;

    /**
     * @description The ID of the node.
     *
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The specifications of instances.
     *
     * @example ens.sn1.stiny
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The number of resources that you can purchase.
     *
     * @example 9
     *
     * @var string
     */
    public $supportResourcesCount;

    /**
     * @description The sizes of system disks.
     *
     * @var systemDiskSizes
     */
    public $systemDiskSizes;
    protected $_name = [
        'dataDiskSizes'         => 'DataDiskSizes',
        'ensRegionId'           => 'EnsRegionId',
        'instanceSpec'          => 'InstanceSpec',
        'supportResourcesCount' => 'SupportResourcesCount',
        'systemDiskSizes'       => 'SystemDiskSizes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskSizes) {
            $res['DataDiskSizes'] = null !== $this->dataDiskSizes ? $this->dataDiskSizes->toMap() : null;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->supportResourcesCount) {
            $res['SupportResourcesCount'] = $this->supportResourcesCount;
        }
        if (null !== $this->systemDiskSizes) {
            $res['SystemDiskSizes'] = null !== $this->systemDiskSizes ? $this->systemDiskSizes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskSizes'])) {
            $model->dataDiskSizes = dataDiskSizes::fromMap($map['DataDiskSizes']);
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['SupportResourcesCount'])) {
            $model->supportResourcesCount = $map['SupportResourcesCount'];
        }
        if (isset($map['SystemDiskSizes'])) {
            $model->systemDiskSizes = systemDiskSizes::fromMap($map['SystemDiskSizes']);
        }

        return $model;
    }
}
