<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceGroups extends Model
{
    /**
     * @description Indicates whether the resource group is available. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example True
     *
     * @var bool
     */
    public $available;

    /**
     * @var int[]
     */
    public $cuOptions;

    /**
     * @description The name of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the resource group. Valid values:
     *
     *   **Interactive**
     *   **Job**
     *
     * >  For more information about resource groups, see [Resource groups](~~428610~~).
     * @example Job
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The amount of remaining computing resources. Unit: ACUs.
     *
     * @example 512
     *
     * @var int
     */
    public $leftComputeResource;

    /**
     * @description The maximum amount of reserved computing resources. Unit: ACUs.
     *
     *   If the value of GroupType is **Interactive**, the amount of reserved computing resources that are not allocated in the cluster is returned in increments of 16 ACUs.
     *   If the value of GroupType is **Job**, the amount of reserved computing resources that are not allocated in the cluster is returned in increments of 8 ACUs.
     *
     * @example 512
     *
     * @var int
     */
    public $maxComputeResource;

    /**
     * @description The minimum amount of reserved computing resources. Unit: ACUs.
     *
     *   If the value of GroupType is **Interactive**, 16 is returned.
     *   If the value of GroupType is **Job**, 0 is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $minComputeResource;
    protected $_name = [
        'available'           => 'Available',
        'cuOptions'           => 'CuOptions',
        'groupName'           => 'GroupName',
        'groupType'           => 'GroupType',
        'leftComputeResource' => 'LeftComputeResource',
        'maxComputeResource'  => 'MaxComputeResource',
        'minComputeResource'  => 'MinComputeResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->cuOptions) {
            $res['CuOptions'] = $this->cuOptions;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->leftComputeResource) {
            $res['LeftComputeResource'] = $this->leftComputeResource;
        }
        if (null !== $this->maxComputeResource) {
            $res['MaxComputeResource'] = $this->maxComputeResource;
        }
        if (null !== $this->minComputeResource) {
            $res['MinComputeResource'] = $this->minComputeResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['CuOptions'])) {
            if (!empty($map['CuOptions'])) {
                $model->cuOptions = $map['CuOptions'];
            }
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['LeftComputeResource'])) {
            $model->leftComputeResource = $map['LeftComputeResource'];
        }
        if (isset($map['MaxComputeResource'])) {
            $model->maxComputeResource = $map['MaxComputeResource'];
        }
        if (isset($map['MinComputeResource'])) {
            $model->minComputeResource = $map['MinComputeResource'];
        }

        return $model;
    }
}
