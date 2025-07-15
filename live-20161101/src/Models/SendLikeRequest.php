<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SendLikeRequest extends Model
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
     * @description The mode in which system messages are broadcasted. Valid values:
     *
     *   0: specifies that system messages are not broadcasted. This is the default value.
     *   1: specifies that system messages are broadcasted to specified users.
     *   2: specifies that system messages are broadcasted to the message group.
     *
     * @example 2
     *
     * @var int
     */
    public $broadCastType;

    /**
     * @description The number of likes.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var string
     */
    public $count;

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
     * @example de1**a0
     *
     * @var string
     */
    public $operatorUserId;
    protected $_name = [
        'appId' => 'AppId',
        'broadCastType' => 'BroadCastType',
        'count' => 'Count',
        'groupId' => 'GroupId',
        'operatorUserId' => 'OperatorUserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->broadCastType) {
            $res['BroadCastType'] = $this->broadCastType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->operatorUserId) {
            $res['OperatorUserId'] = $this->operatorUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendLikeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BroadCastType'])) {
            $model->broadCastType = $map['BroadCastType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }

        return $model;
    }
}
