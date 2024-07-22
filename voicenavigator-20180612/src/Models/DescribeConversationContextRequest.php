<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeConversationContextRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 361c8a53-0e29-42f3-8aa7-c7752d010399
     *
     * @var string
     */
    public $conversationId;

    /**
     * @description This parameter is required.
     *
     * @example 026ca0f4-483b-4252-ae1d-1f15f056f8b9
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'conversationId' => 'ConversationId',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConversationContextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
