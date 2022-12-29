<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceEncryptionKeyResponseBody extends Model
{
    /**
     * @description The UID of the key creator.
     *
     * @example 123456
     *
     * @var string
     */
    public $creator;

    /**
     * @description The scheduled time when the key for the instance will be deleted. If the value is empty, the key will not be deleted.
     *
     * @example 2020-07-06T18:22:03Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description The description of the key for the instance.
     *
     * @example key description example
     *
     * @var string
     */
    public $description;

    /**
     * @description The key for the instance.
     *
     * @example 2axxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description Indicates whether the key for the instance is enabled. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $encryptionKeyStatus;

    /**
     * @description The purpose of the key for the instance.
     *
     * @example ENCRYPT/DECRYPT
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description The expiration time of the key for the instance. The time is displayed in UTC. If the value is empty, the key for the instance will not expire.
     *
     * @example 2020-07-06T18:22:03Z
     *
     * @var string
     */
    public $materialExpireTime;

    /**
     * @description The source of the key for the instance.
     *
     * @example Aliyun_KMS
     *
     * @var string
     */
    public $origin;

    /**
     * @description The ID of the request.
     *
     * @example 783C2062-A2D3-4EA8-88AD-E43F990C23BB
     *
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
