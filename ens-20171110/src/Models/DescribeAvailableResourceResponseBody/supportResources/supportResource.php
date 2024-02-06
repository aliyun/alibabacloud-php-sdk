<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponseBody\supportResources;

use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @description The size of the data disk. Unit: GB.
     *
     * @example 500
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The specifications of the resource plan.
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
     * @description The size of the system disk. Unit: GiB.
     *
     * @example 20
     *
     * @var string
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDiskSize'          => 'DataDiskSize',
        'ensRegionId'           => 'EnsRegionId',
        'instanceSpec'          => 'InstanceSpec',
        'supportResourcesCount' => 'SupportResourcesCount',
        'systemDiskSize'        => 'SystemDiskSize',
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
        if (null !== $this->supportResourcesCount) {
            $res['SupportResourcesCount'] = $this->supportResourcesCount;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
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
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
