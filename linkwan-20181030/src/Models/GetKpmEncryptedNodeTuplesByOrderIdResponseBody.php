<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkWAN\V20181030\Models;

use AlibabaCloud\SDK\LinkWAN\V20181030\Models\GetKpmEncryptedNodeTuplesByOrderIdResponseBody\encryptedNodeTuples;
use AlibabaCloud\Tea\Model;

class GetKpmEncryptedNodeTuplesByOrderIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $dynamicCode;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var encryptedNodeTuples
     */
    public $encryptedNodeTuples;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $encryptedSessionZmk;
    protected $_name = [
        'requestId'           => 'RequestId',
        'message'             => 'Message',
        'dynamicCode'         => 'DynamicCode',
        'dynamicMessage'      => 'DynamicMessage',
        'encryptedNodeTuples' => 'EncryptedNodeTuples',
        'code'                => 'Code',
        'success'             => 'Success',
        'encryptedSessionZmk' => 'EncryptedSessionZmk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->encryptedNodeTuples) {
            $res['EncryptedNodeTuples'] = null !== $this->encryptedNodeTuples ? $this->encryptedNodeTuples->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->encryptedSessionZmk) {
            $res['EncryptedSessionZmk'] = $this->encryptedSessionZmk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKpmEncryptedNodeTuplesByOrderIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['EncryptedNodeTuples'])) {
            $model->encryptedNodeTuples = encryptedNodeTuples::fromMap($map['EncryptedNodeTuples']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['EncryptedSessionZmk'])) {
            $model->encryptedSessionZmk = $map['EncryptedSessionZmk'];
        }

        return $model;
    }
}
