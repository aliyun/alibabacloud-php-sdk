<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstanceTDEInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptorName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $roleARN;

    /**
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'encryptionKey' => 'EncryptionKey',
        'encryptorName' => 'EncryptorName',
        'requestId' => 'RequestId',
        'roleARN' => 'RoleARN',
        'TDEStatus' => 'TDEStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }

        if (null !== $this->encryptorName) {
            $res['EncryptorName'] = $this->encryptorName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }

        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
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
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }

        if (isset($map['EncryptorName'])) {
            $model->encryptorName = $map['EncryptorName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }

        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
