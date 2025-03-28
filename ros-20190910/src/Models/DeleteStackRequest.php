<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class DeleteStackRequest extends Model
{
    /**
     * @var string[]
     */
    public $deleteOptions;

    /**
     * @var int
     */
    public $parallelism;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $retainAllResources;

    /**
     * @var string[]
     */
    public $retainResources;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'deleteOptions' => 'DeleteOptions',
        'parallelism' => 'Parallelism',
        'ramRoleName' => 'RamRoleName',
        'regionId' => 'RegionId',
        'retainAllResources' => 'RetainAllResources',
        'retainResources' => 'RetainResources',
        'stackId' => 'StackId',
    ];

    public function validate()
    {
        if (\is_array($this->deleteOptions)) {
            Model::validateArray($this->deleteOptions);
        }
        if (\is_array($this->retainResources)) {
            Model::validateArray($this->retainResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteOptions) {
            if (\is_array($this->deleteOptions)) {
                $res['DeleteOptions'] = [];
                $n1 = 0;
                foreach ($this->deleteOptions as $item1) {
                    $res['DeleteOptions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }

        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->retainAllResources) {
            $res['RetainAllResources'] = $this->retainAllResources;
        }

        if (null !== $this->retainResources) {
            if (\is_array($this->retainResources)) {
                $res['RetainResources'] = [];
                $n1 = 0;
                foreach ($this->retainResources as $item1) {
                    $res['RetainResources'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
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
        if (isset($map['DeleteOptions'])) {
            if (!empty($map['DeleteOptions'])) {
                $model->deleteOptions = [];
                $n1 = 0;
                foreach ($map['DeleteOptions'] as $item1) {
                    $model->deleteOptions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }

        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RetainAllResources'])) {
            $model->retainAllResources = $map['RetainAllResources'];
        }

        if (isset($map['RetainResources'])) {
            if (!empty($map['RetainResources'])) {
                $model->retainResources = [];
                $n1 = 0;
                foreach ($map['RetainResources'] as $item1) {
                    $model->retainResources[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
