<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsDLQMessageResendByIdRequest extends Model
{
    /**
     * @description The ID of the consumer group in which you want to query dead-letter messages.
     *
     * This parameter is required.
     *
     * @example GID_test_group_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance in which the dead-letter message you want to query resides.
     *
     * @example MQ_INST_188077086902****_BXSuW61e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the dead-letter message that you want to send to a consumer group for consumption.
     *
     * This parameter is required.
     *
     * @example 0BC16699343051CD9F1D798E7734****
     *
     * @var string
     */
    public $msgId;
    protected $_name = [
        'groupId' => 'GroupId',
        'instanceId' => 'InstanceId',
        'msgId' => 'MsgId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsDLQMessageResendByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        return $model;
    }
}
