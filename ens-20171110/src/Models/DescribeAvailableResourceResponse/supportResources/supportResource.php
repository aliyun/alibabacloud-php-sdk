<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponse\supportResources;

use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
    /**
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $supportResourcesCount;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDiskSize'          => 'DataDiskSize',
        'ensRegionId'           => 'EnsRegionId',
        'supportResourcesCount' => 'SupportResourcesCount',
        'instanceSpec'          => 'InstanceSpec',
        'systemDiskSize'        => 'SystemDiskSize',
    ];

    public function validate()
    {
        Model::validateRequired('dataDiskSize', $this->dataDiskSize, true);
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('supportResourcesCount', $this->supportResourcesCount, true);
        Model::validateRequired('instanceSpec', $this->instanceSpec, true);
        Model::validateRequired('systemDiskSize', $this->systemDiskSize, true);
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
        if (null !== $this->supportResourcesCount) {
            $res['SupportResourcesCount'] = $this->supportResourcesCount;
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
        if (isset($map['SupportResourcesCount'])) {
            $model->supportResourcesCount = $map['SupportResourcesCount'];
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
