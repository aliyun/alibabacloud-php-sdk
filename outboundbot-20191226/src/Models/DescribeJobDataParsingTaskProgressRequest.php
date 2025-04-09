<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class DescribeJobDataParsingTaskProgressRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobDataParsingTaskId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobDataParsingTaskId' => 'JobDataParsingTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
