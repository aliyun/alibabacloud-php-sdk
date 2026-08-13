<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CheckHealthResponseBody extends Model
{
    /**
     * @var string
     */
    public $authSource;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $digitalEmployeeName;

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

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'authSource' => 'authSource',
        'callerType' => 'callerType',
        'code' => 'code',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'message' => 'message',
        'requestId' => 'requestId',
        'tenantId' => 'tenantId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authSource) {
            $res['authSource'] = $this->authSource;
        }

        if (null !== $this->callerType) {
            $res['callerType'] = $this->callerType;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->digitalEmployeeName) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeName;
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

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['authSource'])) {
            $model->authSource = $map['authSource'];
        }

        if (isset($map['callerType'])) {
            $model->callerType = $map['callerType'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeName = $map['digitalEmployeeName'];
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

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
