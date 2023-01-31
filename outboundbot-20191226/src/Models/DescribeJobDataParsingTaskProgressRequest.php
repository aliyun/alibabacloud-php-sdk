<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobDataParsingTaskProgressRequest extends Model
{
    /**
     * @example c209abb3-6804-4a75-b2c7-dd55c8c61b6a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 50d5e164-9365-4261-980e-3d979c2c948c
     *
     * @var string
     */
    public $jobDataParsingTaskId;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'jobDataParsingTaskId' => 'JobDataParsingTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobDataParsingTaskId) {
            $res['JobDataParsingTaskId'] = $this->jobDataParsingTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobDataParsingTaskProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobDataParsingTaskId'])) {
            $model->jobDataParsingTaskId = $map['JobDataParsingTaskId'];
        }

        return $model;
    }
}
