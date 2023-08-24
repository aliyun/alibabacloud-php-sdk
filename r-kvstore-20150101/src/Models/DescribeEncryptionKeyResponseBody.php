<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeEncryptionKeyResponseBody extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that is used to create the custom key.
     *
     * @example 17649847********
     *
     * @var string
     */
    public $creator;

    /**
     * @description The time when the custom key is expected to be deleted. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * > If the return value is an empty string, the custom key cannot be automatically deleted.
     * @example 2021-09-24T18:22:03Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description The description of the custom key. By default, an empty string is returned.
     *
     * @example testkey
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the custom key.
     *
     * @example ad463061-992d-4195-8a94-ed63********
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The state of the custom key. Valid values:
     *
     *   **Enabled**: The custom key is available.
     *   **Disabled**: The custom key is unavailable.
     *
     * @example Enabled
     *
     * @var string
     */
    public $encryptionKeyStatus;

    /**
     * @description The encryption algorithm.
     *
     * @example AES-CTR-256
     *
     * @var string
     */
    public $encryptionName;

    /**
     * @description The purpose of the custom key. A value of `ENCRYPT/DECRYPT` indicates encryption and decryption.
     *
     * @example ENCRYPT/DECRYPT
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description The time when the custom key expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * > If the return value is an empty string, the custom key does not expire.
     * @example 2021-09-24T18:22:03Z
     *
     * @var string
     */
    public $materialExpireTime;

    /**
     * @description The source of the custom key. A value of **Aliyun_KMS** indicates [Key Management Service (KMS)](~~28935~~) of Alibaba Cloud.
     *
     * @example Aliyun_KMS
     *
     * @var string
     */
    public $origin;

    /**
     * @description The ID of the request.
     *
     * @example 9A931CE5-C926-5E09-B0EC-6299C4A6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the Resource Access Management (RAM) role to which you want to grant permissions.
     *
     * @example acs:ram::123456789012****:role/AliyunRdsInstanceEncryptionDefaultRole
     *
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'creator'             => 'Creator',
        'deleteDate'          => 'DeleteDate',
        'description'         => 'Description',
        'encryptionKey'       => 'EncryptionKey',
        'encryptionKeyStatus' => 'EncryptionKeyStatus',
        'encryptionName'      => 'EncryptionName',
        'keyUsage'            => 'KeyUsage',
        'materialExpireTime'  => 'MaterialExpireTime',
        'origin'              => 'Origin',
        'requestId'           => 'RequestId',
        'roleArn'             => 'RoleArn',
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
        if (null !== $this->encryptionName) {
            $res['EncryptionName'] = $this->encryptionName;
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
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEncryptionKeyResponseBody
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
        if (isset($map['EncryptionName'])) {
            $model->encryptionName = $map['EncryptionName'];
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
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
