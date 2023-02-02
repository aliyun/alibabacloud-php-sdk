<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsDLQMessageGetByIdRequest extends Model
{
    /**
     * @description The ID of the consumer group whose dead-letter messages you want to query.
     *
     * @example GID_test_group_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance to which the message you want to query belongs.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the dead-letter message that you want to query.
     *
     * @example 0BC16699165C03B925DB8A404E2D****
     *
     * @var string
     */
    public $msgId;
    protected $_name = [
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
        'msgId'      => 'MsgId',
    ];

    public function validate()
    {
    }

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
     * @return OnsDLQMessageGetByIdRequest
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
