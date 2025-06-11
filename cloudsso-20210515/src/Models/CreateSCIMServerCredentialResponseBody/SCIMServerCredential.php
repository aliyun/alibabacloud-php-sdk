<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateSCIMServerCredentialResponseBody;

use AlibabaCloud\Dara\Model;

class SCIMServerCredential extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $credentialSecret;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'credentialId' => 'CredentialId',
        'credentialSecret' => 'CredentialSecret',
        'credentialType' => 'CredentialType',
        'directoryId' => 'DirectoryId',
        'expireTime' => 'ExpireTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }

        if (null !== $this->credentialSecret) {
            $res['CredentialSecret'] = $this->credentialSecret;
        }

        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }

        if (isset($map['CredentialSecret'])) {
            $model->credentialSecret = $map['CredentialSecret'];
        }

        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
