<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CancelMuteAllGroupUserRequest extends Model
{
    /**
     * @description Interactive message application ID.
     *
     * This parameter is required.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description 系统消息扩散类型，取值：
     *
     * - 0：不扩散。
     *
     * - 1：扩散到指定人。
     *
     * - 2：扩散到群组。
     *
     * @example 2
     *
     * @var int
     */
    public $broadCastType;

    /**
     * @description Message group ID.
     *
     * This parameter is required.
     *
     * @example AE35-****-T95F
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Operator\\"s UserId. > This parameter is required and the user must be the creator of the group.
     *
     * @example de1**a0
     *
     * @var string
     */
    public $operatorUserId;
    protected $_name = [
        'appId' => 'AppId',
        'broadCastType' => 'BroadCastType',
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
     * @return CancelMuteAllGroupUserRequest
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }

        return $model;
    }
}
