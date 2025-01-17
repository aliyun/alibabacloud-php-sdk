<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class TakeoverAIAgentCallRequest extends Model
{
    /**
     * @var string
     */
    public $humanAgentUserId;
    /**
     * @var string
     */
    public $instanceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
