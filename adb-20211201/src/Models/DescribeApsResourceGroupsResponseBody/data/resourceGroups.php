<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceGroups extends Model
{
    /**
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
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example Job
     *
     * @var string
     */
    public $groupType;

    /**
     * @example 512
     *
     * @var int
     */
    public $leftComputeResource;

    /**
     * @example 512
     *
     * @var int
     */
    public $maxComputeResource;

    /**
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
