<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $briefTypes;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 46a9ad0c-3e11-44da-a9a7-2c21bf5ce185
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->briefTypes) {
            $res['BriefTypes'] = $this->briefTypes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BriefTypes'])) {
            if (!empty($map['BriefTypes'])) {
                $model->briefTypes = $map['BriefTypes'];
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
