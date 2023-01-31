<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateJobDataParsingTaskRequest extends Model
{
    /**
     * @example b3865dc3-40fa-4afd-9fe4-dc7cda305a24
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobFilePath;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'jobFilePath' => 'JobFilePath',
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
        if (null !== $this->jobFilePath) {
            $res['JobFilePath'] = $this->jobFilePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobDataParsingTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobFilePath'])) {
            $model->jobFilePath = $map['JobFilePath'];
        }

        return $model;
    }
}
