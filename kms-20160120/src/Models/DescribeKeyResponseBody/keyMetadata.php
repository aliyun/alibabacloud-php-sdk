<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyResponseBody;

use AlibabaCloud\Tea\Model;

class keyMetadata extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $automaticRotation;

    /**
     * @var string
     */
    public $creationDate;

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
    public $deletionProtection;

    /**
     * @var string
     */
    public $deletionProtectionDescription;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keySpec;

    /**
     * @var string
     */
    public $keyState;

    /**
     * @var string
     */
    public $keyUsage;

    /**
     * @var string
     */
    public $lastRotationDate;

    /**
     * @var string
     */
    public $materialExpireTime;

    /**
     * @var string
     */
    public $nextRotationDate;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $primaryKeyVersion;

    /**
     * @var string
     */
    public $protectionLevel;

    /**
     * @var string
     */
    public $rotationInterval;
    protected $_name = [
        'arn'                           => 'Arn',
        'automaticRotation'             => 'AutomaticRotation',
        'creationDate'                  => 'CreationDate',
        'creator'                       => 'Creator',
        'deleteDate'                    => 'DeleteDate',
        'deletionProtection'            => 'DeletionProtection',
        'deletionProtectionDescription' => 'DeletionProtectionDescription',
        'description'                   => 'Description',
        'keyId'                         => 'KeyId',
        'keySpec'                       => 'KeySpec',
        'keyState'                      => 'KeyState',
        'keyUsage'                      => 'KeyUsage',
        'lastRotationDate'              => 'LastRotationDate',
        'materialExpireTime'            => 'MaterialExpireTime',
        'nextRotationDate'              => 'NextRotationDate',
        'origin'                        => 'Origin',
        'primaryKeyVersion'             => 'PrimaryKeyVersion',
        'protectionLevel'               => 'ProtectionLevel',
        'rotationInterval'              => 'RotationInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->automaticRotation) {
            $res['AutomaticRotation'] = $this->automaticRotation;
        }
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->deletionProtectionDescription) {
            $res['DeletionProtectionDescription'] = $this->deletionProtectionDescription;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->keyState) {
            $res['KeyState'] = $this->keyState;
        }
        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = $this->keyUsage;
        }
        if (null !== $this->lastRotationDate) {
            $res['LastRotationDate'] = $this->lastRotationDate;
        }
        if (null !== $this->materialExpireTime) {
            $res['MaterialExpireTime'] = $this->materialExpireTime;
        }
        if (null !== $this->nextRotationDate) {
            $res['NextRotationDate'] = $this->nextRotationDate;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->primaryKeyVersion) {
            $res['PrimaryKeyVersion'] = $this->primaryKeyVersion;
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['AutomaticRotation'])) {
            $model->automaticRotation = $map['AutomaticRotation'];
        }
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DeletionProtectionDescription'])) {
            $model->deletionProtectionDescription = $map['DeletionProtectionDescription'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['KeyState'])) {
            $model->keyState = $map['KeyState'];
        }
        if (isset($map['KeyUsage'])) {
            $model->keyUsage = $map['KeyUsage'];
        }
        if (isset($map['LastRotationDate'])) {
            $model->lastRotationDate = $map['LastRotationDate'];
        }
        if (isset($map['MaterialExpireTime'])) {
            $model->materialExpireTime = $map['MaterialExpireTime'];
        }
        if (isset($map['NextRotationDate'])) {
            $model->nextRotationDate = $map['NextRotationDate'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['PrimaryKeyVersion'])) {
            $model->primaryKeyVersion = $map['PrimaryKeyVersion'];
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }

        return $model;
    }
}
