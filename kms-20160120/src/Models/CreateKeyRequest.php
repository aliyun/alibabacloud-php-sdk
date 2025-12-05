<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class CreateKeyRequest extends Model
{
    /**
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @var string
     */
    public $keySpec;

    /**
     * @var string
     */
    public $keyStorageMechanism;

    /**
     * @var string
     */
    public $keyUsage;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $protectionLevel;

    /**
     * @var string
     */
    public $rotationInterval;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'DKMSInstanceId' => 'DKMSInstanceId',
        'description' => 'Description',
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'keySpec' => 'KeySpec',
        'keyStorageMechanism' => 'KeyStorageMechanism',
        'keyUsage' => 'KeyUsage',
        'origin' => 'Origin',
        'policy' => 'Policy',
        'protectionLevel' => 'ProtectionLevel',
        'rotationInterval' => 'RotationInterval',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DKMSInstanceId) {
            $res['DKMSInstanceId'] = $this->DKMSInstanceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableAutomaticRotation) {
            $res['EnableAutomaticRotation'] = $this->enableAutomaticRotation;
        }

        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }

        if (null !== $this->keyStorageMechanism) {
            $res['KeyStorageMechanism'] = $this->keyStorageMechanism;
        }

        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = $this->keyUsage;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }

        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['DKMSInstanceId'])) {
            $model->DKMSInstanceId = $map['DKMSInstanceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableAutomaticRotation'])) {
            $model->enableAutomaticRotation = $map['EnableAutomaticRotation'];
        }

        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }

        if (isset($map['KeyStorageMechanism'])) {
            $model->keyStorageMechanism = $map['KeyStorageMechanism'];
        }

        if (isset($map['KeyUsage'])) {
            $model->keyUsage = $map['KeyUsage'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }

        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
