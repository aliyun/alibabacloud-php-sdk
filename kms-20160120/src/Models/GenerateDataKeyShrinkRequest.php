<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GenerateDataKeyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataKeyName;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $encryptionContextShrink;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyMaterial;

    /**
     * @var string
     */
    public $keySpec;

    /**
     * @var bool
     */
    public $managedByKms;

    /**
     * @var int
     */
    public $numberOfBytes;

    /**
     * @var string
     */
    public $recipient;
    protected $_name = [
        'dataKeyName' => 'DataKeyName',
        'dryRun' => 'DryRun',
        'encryptionContextShrink' => 'EncryptionContext',
        'keyId' => 'KeyId',
        'keyMaterial' => 'KeyMaterial',
        'keySpec' => 'KeySpec',
        'managedByKms' => 'ManagedByKms',
        'numberOfBytes' => 'NumberOfBytes',
        'recipient' => 'Recipient',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataKeyName) {
            $res['DataKeyName'] = $this->dataKeyName;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->encryptionContextShrink) {
            $res['EncryptionContext'] = $this->encryptionContextShrink;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->keyMaterial) {
            $res['KeyMaterial'] = $this->keyMaterial;
        }

        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }

        if (null !== $this->managedByKms) {
            $res['ManagedByKms'] = $this->managedByKms;
        }

        if (null !== $this->numberOfBytes) {
            $res['NumberOfBytes'] = $this->numberOfBytes;
        }

        if (null !== $this->recipient) {
            $res['Recipient'] = $this->recipient;
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
        if (isset($map['DataKeyName'])) {
            $model->dataKeyName = $map['DataKeyName'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EncryptionContext'])) {
            $model->encryptionContextShrink = $map['EncryptionContext'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['KeyMaterial'])) {
            $model->keyMaterial = $map['KeyMaterial'];
        }

        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }

        if (isset($map['ManagedByKms'])) {
            $model->managedByKms = $map['ManagedByKms'];
        }

        if (isset($map['NumberOfBytes'])) {
            $model->numberOfBytes = $map['NumberOfBytes'];
        }

        if (isset($map['Recipient'])) {
            $model->recipient = $map['Recipient'];
        }

        return $model;
    }
}
