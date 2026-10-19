<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CheckAppResourcePermissionResponseBody extends Model
{
    /**
     * @var bool
     */
    public $allowed;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceKey;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'allowed' => 'allowed',
        'code' => 'code',
        'message' => 'message',
        'permission' => 'permission',
        'requestId' => 'requestId',
        'resourceKey' => 'resourceKey',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowed) {
            $res['allowed'] = $this->allowed;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->permission) {
            $res['permission'] = $this->permission;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resourceKey) {
            $res['resourceKey'] = $this->resourceKey;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['allowed'])) {
            $model->allowed = $map['allowed'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['permission'])) {
            $model->permission = $map['permission'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resourceKey'])) {
            $model->resourceKey = $map['resourceKey'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
