<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstanceCLSResponseBody extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionKeyMode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $whiteListMode;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'encryptionKey' => 'EncryptionKey',
        'encryptionKeyMode' => 'EncryptionKeyMode',
        'requestId' => 'RequestId',
        'whiteListMode' => 'WhiteListMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }

        if (null !== $this->encryptionKeyMode) {
            $res['EncryptionKeyMode'] = $this->encryptionKeyMode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->whiteListMode) {
            $res['WhiteListMode'] = $this->whiteListMode;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }

        if (isset($map['EncryptionKeyMode'])) {
            $model->encryptionKeyMode = $map['EncryptionKeyMode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WhiteListMode'])) {
            $model->whiteListMode = $map['WhiteListMode'];
        }

        return $model;
    }
}
