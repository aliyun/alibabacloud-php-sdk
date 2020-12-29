<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo\dataDiskCategories;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo\instanceGenerations;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo\instanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo\instanceTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo\networkTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo\systemDiskCategories;
use AlibabaCloud\Tea\Model;

class resourcesInfo extends Model
{
    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var systemDiskCategories
     */
    public $systemDiskCategories;

    /**
     * @var instanceGenerations
     */
    public $instanceGenerations;

    /**
     * @var dataDiskCategories
     */
    public $dataDiskCategories;

    /**
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @var instanceTypeFamilies
     */
    public $instanceTypeFamilies;

    /**
     * @var networkTypes
     */
    public $networkTypes;
    protected $_name = [
        'ioOptimized'          => 'IoOptimized',
        'systemDiskCategories' => 'SystemDiskCategories',
        'instanceGenerations'  => 'InstanceGenerations',
        'dataDiskCategories'   => 'DataDiskCategories',
        'instanceTypes'        => 'InstanceTypes',
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
        'networkTypes'         => 'NetworkTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->systemDiskCategories) {
            $res['SystemDiskCategories'] = null !== $this->systemDiskCategories ? $this->systemDiskCategories->toMap() : null;
        }
        if (null !== $this->instanceGenerations) {
            $res['InstanceGenerations'] = null !== $this->instanceGenerations ? $this->instanceGenerations->toMap() : null;
        }
        if (null !== $this->dataDiskCategories) {
            $res['DataDiskCategories'] = null !== $this->dataDiskCategories ? $this->dataDiskCategories->toMap() : null;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = null !== $this->instanceTypeFamilies ? $this->instanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = null !== $this->networkTypes ? $this->networkTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcesInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['SystemDiskCategories'])) {
            $model->systemDiskCategories = systemDiskCategories::fromMap($map['SystemDiskCategories']);
        }
        if (isset($map['InstanceGenerations'])) {
            $model->instanceGenerations = instanceGenerations::fromMap($map['InstanceGenerations']);
        }
        if (isset($map['DataDiskCategories'])) {
            $model->dataDiskCategories = dataDiskCategories::fromMap($map['DataDiskCategories']);
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['InstanceTypeFamilies'])) {
            $model->instanceTypeFamilies = instanceTypeFamilies::fromMap($map['InstanceTypeFamilies']);
        }
        if (isset($map['NetworkTypes'])) {
            $model->networkTypes = networkTypes::fromMap($map['NetworkTypes']);
        }

        return $model;
    }
}
