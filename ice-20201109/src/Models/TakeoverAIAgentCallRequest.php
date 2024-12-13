<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class TakeoverAIAgentCallRequest extends Model
{
    /**
     * @example uid2
     *
     * @var string
     */
    public $humanAgentUserId;

    /**
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $requireToken;
    protected $_name = [
        'humanAgentUserId' => 'HumanAgentUserId',
        'instanceId'       => 'InstanceId',
        'requireToken'     => 'RequireToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->humanAgentUserId) {
            $res['HumanAgentUserId'] = $this->humanAgentUserId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requireToken) {
            $res['RequireToken'] = $this->requireToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TakeoverAIAgentCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HumanAgentUserId'])) {
            $model->humanAgentUserId = $map['HumanAgentUserId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequireToken'])) {
            $model->requireToken = $map['RequireToken'];
        }

        return $model;
    }
}
