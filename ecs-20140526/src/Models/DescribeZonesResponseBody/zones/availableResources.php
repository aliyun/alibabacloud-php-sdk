<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\Tea\Model;

class availableResources extends Model
{
    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var string[]
     */
    public $systemDiskCategories;

    /**
     * @var string[]
     */
    public $instanceGenerations;

    /**
     * @var string[]
     */
    public $dataDiskCategories;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string[]
     */
    public $instanceTypeFamilies;

    /**
     * @var string[]
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
            $res['SystemDiskCategories'] = $this->systemDiskCategories;
        }
        if (null !== $this->instanceGenerations) {
            $res['InstanceGenerations'] = $this->instanceGenerations;
        }
        if (null !== $this->dataDiskCategories) {
            $res['DataDiskCategories'] = $this->dataDiskCategories;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = $this->instanceTypeFamilies;
        }
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = $this->networkTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['SystemDiskCategories'])) {
            if (!empty($map['SystemDiskCategories'])) {
                $model->systemDiskCategories = $map['SystemDiskCategories'];
            }
        }
        if (isset($map['InstanceGenerations'])) {
            if (!empty($map['InstanceGenerations'])) {
                $model->instanceGenerations = $map['InstanceGenerations'];
            }
        }
        if (isset($map['DataDiskCategories'])) {
            if (!empty($map['DataDiskCategories'])) {
                $model->dataDiskCategories = $map['DataDiskCategories'];
            }
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['InstanceTypeFamilies'])) {
            if (!empty($map['InstanceTypeFamilies'])) {
                $model->instanceTypeFamilies = $map['InstanceTypeFamilies'];
            }
        }
        if (isset($map['NetworkTypes'])) {
            if (!empty($map['NetworkTypes'])) {
                $model->networkTypes = $map['NetworkTypes'];
            }
        }

        return $model;
    }
}
