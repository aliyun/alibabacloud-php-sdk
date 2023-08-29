<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListRolesResponseBody extends Model
{
    /**
     * @description code
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description message
     *
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @description data
     *
     * @example 2cb472ec1bf84f8d92f9c4baa0d21c19aa
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description requestId
     *
     * @example B7F4B621-E41E-4C84-B97F-42B5380A32BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description role list data
     *
     * @example [
     * ]
     * @var Role[]
     */
    public $roles;

    /**
     * @description success
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'nextPageToken' => 'NextPageToken',
        'requestId'     => 'RequestId',
        'roles'         => 'Roles',
        'success'       => 'Success',
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
        if (null !== $this->roles) {
            $res['Roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['Roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRolesResponseBody
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
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['Roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? Role::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
