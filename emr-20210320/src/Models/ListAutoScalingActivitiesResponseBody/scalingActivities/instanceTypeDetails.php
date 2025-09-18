<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListAutoScalingActivitiesResponseBody\scalingActivities;

use AlibabaCloud\Dara\Model;

class instanceTypeDetails extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string[]
     */
    public $onDemandInstanceIds;

    /**
     * @var string[]
     */
    public $spotInstanceIds;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'onDemandInstanceIds' => 'OnDemandInstanceIds',
        'spotInstanceIds' => 'SpotInstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->onDemandInstanceIds)) {
            Model::validateArray($this->onDemandInstanceIds);
        }
        if (\is_array($this->spotInstanceIds)) {
            Model::validateArray($this->spotInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->onDemandInstanceIds) {
            if (\is_array($this->onDemandInstanceIds)) {
                $res['OnDemandInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->onDemandInstanceIds as $item1) {
                    $res['OnDemandInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spotInstanceIds) {
            if (\is_array($this->spotInstanceIds)) {
                $res['SpotInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->spotInstanceIds as $item1) {
                    $res['SpotInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['OnDemandInstanceIds'])) {
            if (!empty($map['OnDemandInstanceIds'])) {
                $model->onDemandInstanceIds = [];
                $n1 = 0;
                foreach ($map['OnDemandInstanceIds'] as $item1) {
                    $model->onDemandInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SpotInstanceIds'])) {
            if (!empty($map['SpotInstanceIds'])) {
                $model->spotInstanceIds = [];
                $n1 = 0;
                foreach ($map['SpotInstanceIds'] as $item1) {
                    $model->spotInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
