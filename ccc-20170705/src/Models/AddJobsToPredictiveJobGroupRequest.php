<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class AddJobsToPredictiveJobGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string[]
     */
    public $jobsJson;

    /**
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'instanceId'   => 'InstanceId',
        'jobGroupId'   => 'JobGroupId',
        'jobsJson'     => 'JobsJson',
        'skillGroupId' => 'SkillGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobsJson) {
            $res['JobsJson'] = $this->jobsJson;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddJobsToPredictiveJobGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobsJson'])) {
            if (!empty($map['JobsJson'])) {
                $model->jobsJson = $map['JobsJson'];
            }
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
