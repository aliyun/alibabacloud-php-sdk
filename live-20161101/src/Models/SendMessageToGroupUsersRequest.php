<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SendMessageToGroupUsersRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The message body. The value is a JSON string.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the message group.
     *
     * This parameter is required.
     *
     * @example AE35-****-T95F
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the user who performs the operation.
     *
     * This parameter is required.
     *
     * @example de1**a0
     *
     * @var string
     */
    public $operatorUserId;

    /**
     * @description The list of users to receive the message.
     *
     * @var string[]
     */
    public $receiverIdList;

    /**
     * @description Specifies whether the message requires Alibaba Cloud content moderation. Valid values:
     *
     * - **true**: does not require content moderation.
     * - **false**: requires content moderation. This is the default value.
     *
     * @example true
     *
     * @var bool
     */
    public $skipAudit;

    /**
     * @description The type of the message. A value that is less than or equal to 10000 specifies a system message. A value that is greater than 10000 specifies a custom message.
     *
     * This parameter is required.
     *
     * @example 12000
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'data' => 'Data',
        'groupId' => 'GroupId',
        'operatorUserId' => 'OperatorUserId',
        'receiverIdList' => 'ReceiverIdList',
        'skipAudit' => 'SkipAudit',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->operatorUserId) {
            $res['OperatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->receiverIdList) {
            $res['ReceiverIdList'] = $this->receiverIdList;
        }
        if (null !== $this->skipAudit) {
            $res['SkipAudit'] = $this->skipAudit;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageToGroupUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }
        if (isset($map['ReceiverIdList'])) {
            if (!empty($map['ReceiverIdList'])) {
                $model->receiverIdList = $map['ReceiverIdList'];
            }
        }
        if (isset($map['SkipAudit'])) {
            $model->skipAudit = $map['SkipAudit'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
