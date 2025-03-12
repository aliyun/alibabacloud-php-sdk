<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest;

use AlibabaCloud\Tea\Model;

class ossDeliveryConfig extends Model
{
    /**
     * @description The name of the OSS bucket.
     *
     * @example example-bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description Specifies whether to deliver records to OSS. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The OSS encryption algorithm. Valid values:
     *
     *   AES256
     *   SM4
     *
     * @example AES256
     *
     * @var string
     */
    public $encryptionAlgorithm;

    /**
     * @description The ID of the customer master key (CMK) when EncryptionType is set to KMS.
     *
     * @example a807****7a70e
     *
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @description The OSS encryption method. Valid values:
     *
     *   Inherit: the encryption method used by the specified bucket.
     *   OssManaged: server-side encryption by using OSS-managed keys (SSE-OSS).
     *   KMS: server-side encryption by using Key Management Service managed keys (SSE-KMS).
     *
     * @example Inherit
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @description The prefix of the OSS bucket directory. The prefix must meet the following requirements:
     *
     *   The prefix can be up to 254 characters in length.
     *   The prefix cannot start with a forward slash (/) or a backslash (\\\\).
     *
     * Note: If you do not need a directory prefix, specify a pair of double quotation marks ("") for this parameter to clear the directory prefix that you specified.
     * @example sessionmanager/audit
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'bucketName'          => 'BucketName',
        'enabled'             => 'Enabled',
        'encryptionAlgorithm' => 'EncryptionAlgorithm',
        'encryptionKeyId'     => 'EncryptionKeyId',
        'encryptionType'      => 'EncryptionType',
        'prefix'              => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->encryptionAlgorithm) {
            $res['EncryptionAlgorithm'] = $this->encryptionAlgorithm;
        }
        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossDeliveryConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['EncryptionAlgorithm'])) {
            $model->encryptionAlgorithm = $map['EncryptionAlgorithm'];
        }
        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
