<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DeleteContextDatabaseMemberResponseBody;

use AlibabaCloud\Dara\Model;

class keys extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $keyDisplaySuffix;

    /**
     * @var int
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyPrefix;

    /**
     * @var string
     */
    public $lastUsedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $revokedAt;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'description' => 'Description',
        'expiresAt' => 'ExpiresAt',
        'keyDisplaySuffix' => 'KeyDisplaySuffix',
        'keyId' => 'KeyId',
        'keyPrefix' => 'KeyPrefix',
        'lastUsedAt' => 'LastUsedAt',
        'name' => 'Name',
        'revokedAt' => 'RevokedAt',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->keyDisplaySuffix) {
            $res['KeyDisplaySuffix'] = $this->keyDisplaySuffix;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->keyPrefix) {
            $res['KeyPrefix'] = $this->keyPrefix;
        }

        if (null !== $this->lastUsedAt) {
            $res['LastUsedAt'] = $this->lastUsedAt;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->revokedAt) {
            $res['RevokedAt'] = $this->revokedAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['KeyDisplaySuffix'])) {
            $model->keyDisplaySuffix = $map['KeyDisplaySuffix'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['KeyPrefix'])) {
            $model->keyPrefix = $map['KeyPrefix'];
        }

        if (isset($map['LastUsedAt'])) {
            $model->lastUsedAt = $map['LastUsedAt'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RevokedAt'])) {
            $model->revokedAt = $map['RevokedAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
