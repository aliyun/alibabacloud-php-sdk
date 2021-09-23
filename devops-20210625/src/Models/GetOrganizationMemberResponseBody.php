<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponseBody\member;
use AlibabaCloud\Tea\Model;

class GetOrganizationMemberResponseBody extends Model
{
    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 成员
     *
     * @var member
     */
    public $member;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description true 接口调用成功，false 接口调用失败
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'    => 'requestId',
        'errorMessage' => 'errorMessage',
        'member'       => 'member',
        'errorCode'    => 'errorCode',
        'success'      => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->member) {
            $res['member'] = null !== $this->member ? $this->member->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrganizationMemberResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['member'])) {
            $model->member = member::fromMap($map['member']);
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
