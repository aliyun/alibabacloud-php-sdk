<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest;

use AlibabaCloud\Dara\Model;

class ossDeliveryConfig extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $encryptionAlgorithm;

    /**
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $prefix;
    protected $_name = [
        'bucketName' => 'BucketName',
        'enabled' => 'Enabled',
        'encryptionAlgorithm' => 'EncryptionAlgorithm',
        'encryptionKeyId' => 'EncryptionKeyId',
        'encryptionType' => 'EncryptionType',
        'prefix' => 'Prefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
