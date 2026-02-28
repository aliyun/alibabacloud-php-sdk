<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ListMultiChannelRecordingsRequest extends Model
{
    /**
     * @var string
     */
    public $agentChannelId;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'agentChannelId' => 'AgentChannelId',
        'agentId' => 'AgentId',
        'contactId' => 'ContactId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentChannelId) {
            $res['AgentChannelId'] = $this->agentChannelId;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AgentChannelId'])) {
            $model->agentChannelId = $map['AgentChannelId'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
