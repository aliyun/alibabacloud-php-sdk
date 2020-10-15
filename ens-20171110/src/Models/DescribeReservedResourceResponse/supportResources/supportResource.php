<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponse\supportResources;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponse\supportResources\supportResource\dataDiskSizes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponse\supportResources\supportResource\systemDiskSizes;
use AlibabaCloud\Tea\Model;

class supportResource extends Model
{
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
     * @var systemDiskSizes
     */
    public $systemDiskSizes;

    /**
     * @var dataDiskSizes
     */
    public $dataDiskSizes;
    protected $_name = [
        'ensRegionId'           => 'EnsRegionId',
        'supportResourcesCount' => 'SupportResourcesCount',
        'instanceSpec'          => 'InstanceSpec',
        'systemDiskSizes'       => 'SystemDiskSizes',
        'dataDiskSizes'         => 'DataDiskSizes',
    ];

    public function validate()
    {
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('supportResourcesCount', $this->supportResourcesCount, true);
        Model::validateRequired('instanceSpec', $this->instanceSpec, true);
        Model::validateRequired('systemDiskSizes', $this->systemDiskSizes, true);
        Model::validateRequired('dataDiskSizes', $this->dataDiskSizes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->supportResourcesCount) {
            $res['SupportResourcesCount'] = $this->supportResourcesCount;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->systemDiskSizes) {
            $res['SystemDiskSizes'] = null !== $this->systemDiskSizes ? $this->systemDiskSizes->toMap() : null;
        }
        if (null !== $this->dataDiskSizes) {
            $res['DataDiskSizes'] = null !== $this->dataDiskSizes ? $this->dataDiskSizes->toMap() : null;
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['SupportResourcesCount'])) {
            $model->supportResourcesCount = $map['SupportResourcesCount'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['SystemDiskSizes'])) {
            $model->systemDiskSizes = systemDiskSizes::fromMap($map['SystemDiskSizes']);
        }
        if (isset($map['DataDiskSizes'])) {
            $model->dataDiskSizes = dataDiskSizes::fromMap($map['DataDiskSizes']);
        }

        return $model;
    }
}
