<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class DescribeJobGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $briefTypes;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;
    protected $_name = [
        'briefTypes' => 'BriefTypes',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->briefTypes)) {
            Model::validateArray($this->briefTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->briefTypes) {
            if (\is_array($this->briefTypes)) {
                $res['BriefTypes'] = [];
                $n1 = 0;
                foreach ($this->briefTypes as $item1) {
                    $res['BriefTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
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
        if (isset($map['BriefTypes'])) {
            if (!empty($map['BriefTypes'])) {
                $model->briefTypes = [];
                $n1 = 0;
                foreach ($map['BriefTypes'] as $item1) {
                    $model->briefTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }

        return $model;
    }
}
