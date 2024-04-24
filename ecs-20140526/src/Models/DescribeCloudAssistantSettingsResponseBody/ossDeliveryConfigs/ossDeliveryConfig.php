<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\ossDeliveryConfigs;

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
     * @description The type of items to be delivered. Valid values:
     *
     *   SessionManager: session records
     *   Invocation: task execution records
     *
     * @example SessionManager
     *
     * @var string
     */
    public $deliveryType;

    /**
     * @description Indicates whether to deliver the specified items to OSS.
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
     * @description The ID of the customer master key (CMK) when EncryptionType is KMS.
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
     * @description The prefix of the OSS bucket directory.
     *
     * @example sessionmanager/audit
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'bucketName'          => 'BucketName',
        'deliveryType'        => 'DeliveryType',
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
        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
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
        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
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
