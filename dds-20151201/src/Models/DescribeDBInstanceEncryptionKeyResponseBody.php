<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceEncryptionKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $deleteDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionKeyStatus;

    /**
     * @var string
     */
    public $keyUsage;

    /**
     * @var string
     */
    public $materialExpireTime;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'creator'             => 'Creator',
        'deleteDate'          => 'DeleteDate',
        'description'         => 'Description',
        'encryptionKey'       => 'EncryptionKey',
        'encryptionKeyStatus' => 'EncryptionKeyStatus',
        'keyUsage'            => 'KeyUsage',
        'materialExpireTime'  => 'MaterialExpireTime',
        'origin'              => 'Origin',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionKeyStatus) {
            $res['EncryptionKeyStatus'] = $this->encryptionKeyStatus;
        }
        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = $this->keyUsage;
        }
        if (null !== $this->materialExpireTime) {
            $res['MaterialExpireTime'] = $this->materialExpireTime;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceEncryptionKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionKeyStatus'])) {
            $model->encryptionKeyStatus = $map['EncryptionKeyStatus'];
        }
        if (isset($map['KeyUsage'])) {
            $model->keyUsage = $map['KeyUsage'];
        }
        if (isset($map['MaterialExpireTime'])) {
            $model->materialExpireTime = $map['MaterialExpireTime'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
