<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsResourceGroupsResponseBody\data;

use AlibabaCloud\Dara\Model;

class resourceGroups extends Model
{
    /**
     * @var bool
     */
    public $available;

    /**
     * @var int[]
     */
    public $cuOptions;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var int
     */
    public $leftComputeResource;

    /**
     * @var int
     */
    public $maxComputeResource;

    /**
     * @var int
     */
    public $minComputeResource;
    protected $_name = [
        'available' => 'Available',
        'cuOptions' => 'CuOptions',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'leftComputeResource' => 'LeftComputeResource',
        'maxComputeResource' => 'MaxComputeResource',
        'minComputeResource' => 'MinComputeResource',
    ];

    public function validate()
    {
        if (\is_array($this->cuOptions)) {
            Model::validateArray($this->cuOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }

        if (null !== $this->cuOptions) {
            if (\is_array($this->cuOptions)) {
                $res['CuOptions'] = [];
                $n1 = 0;
                foreach ($this->cuOptions as $item1) {
                    $res['CuOptions'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }

        if (isset($map['CuOptions'])) {
            if (!empty($map['CuOptions'])) {
                $model->cuOptions = [];
                $n1 = 0;
                foreach ($map['CuOptions'] as $item1) {
                    $model->cuOptions[$n1++] = $item1;
                }
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
