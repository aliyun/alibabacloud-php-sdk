<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceExpireTimeResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $found;

    /**
     * @var string
     */
    public $instanceExpireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'code' => 'code',
        'found' => 'found',
        'instanceExpireTime' => 'instanceExpireTime',
        'instanceId' => 'instanceId',
        'instanceStatus' => 'instanceStatus',
        'message' => 'message',
        'requestId' => 'requestId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->found) {
            $res['found'] = $this->found;
        }

        if (null !== $this->instanceExpireTime) {
            $res['instanceExpireTime'] = $this->instanceExpireTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['instanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['found'])) {
            $model->found = $map['found'];
        }

        if (isset($map['instanceExpireTime'])) {
            $model->instanceExpireTime = $map['instanceExpireTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceStatus'])) {
            $model->instanceStatus = $map['instanceStatus'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
