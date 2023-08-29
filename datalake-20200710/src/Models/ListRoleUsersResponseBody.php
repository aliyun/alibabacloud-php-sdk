<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListRoleUsersResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @description NextPageToken
     *
     * @example token!
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description RequestId
     *
     * @example 558D764F-8C55-49CA-BF38-80EA532FC08F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description user roles
     *
     * @var UserRole[]
     */
    public $userRoles;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'nextPageToken' => 'NextPageToken',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'userRoles'     => 'UserRoles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->userRoles) {
            $res['UserRoles'] = [];
            if (null !== $this->userRoles && \is_array($this->userRoles)) {
                $n = 0;
                foreach ($this->userRoles as $item) {
                    $res['UserRoles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRoleUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['UserRoles'])) {
            if (!empty($map['UserRoles'])) {
                $model->userRoles = [];
                $n                = 0;
                foreach ($map['UserRoles'] as $item) {
                    $model->userRoles[$n++] = null !== $item ? UserRole::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
