<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateSkillResponseBody;

use AlibabaCloud\Dara\Model;

class version extends Model
{
    /**
     * @var string
     */
    public $activatedAt;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $credentialRequired;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $packageSize;

    /**
     * @var string
     */
    public $revokeReason;

    /**
     * @var string
     */
    public $revokedAt;

    /**
     * @var string
     */
    public $sha256;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'activatedAt' => 'ActivatedAt',
        'createdAt' => 'CreatedAt',
        'credentialRequired' => 'CredentialRequired',
        'id' => 'Id',
        'packageSize' => 'PackageSize',
        'revokeReason' => 'RevokeReason',
        'revokedAt' => 'RevokedAt',
        'sha256' => 'Sha256',
        'skillId' => 'SkillId',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activatedAt) {
            $res['ActivatedAt'] = $this->activatedAt;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->credentialRequired) {
            $res['CredentialRequired'] = $this->credentialRequired;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->packageSize) {
            $res['PackageSize'] = $this->packageSize;
        }

        if (null !== $this->revokeReason) {
            $res['RevokeReason'] = $this->revokeReason;
        }

        if (null !== $this->revokedAt) {
            $res['RevokedAt'] = $this->revokedAt;
        }

        if (null !== $this->sha256) {
            $res['Sha256'] = $this->sha256;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ActivatedAt'])) {
            $model->activatedAt = $map['ActivatedAt'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['CredentialRequired'])) {
            $model->credentialRequired = $map['CredentialRequired'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PackageSize'])) {
            $model->packageSize = $map['PackageSize'];
        }

        if (isset($map['RevokeReason'])) {
            $model->revokeReason = $map['RevokeReason'];
        }

        if (isset($map['RevokedAt'])) {
            $model->revokedAt = $map['RevokedAt'];
        }

        if (isset($map['Sha256'])) {
            $model->sha256 = $map['Sha256'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
