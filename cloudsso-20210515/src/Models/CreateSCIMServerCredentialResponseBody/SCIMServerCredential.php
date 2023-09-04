<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateSCIMServerCredentialResponseBody;

use AlibabaCloud\Tea\Model;

class SCIMServerCredential extends Model
{
    /**
     * @description The time when the SCIM credential was created.
     *
     * @example 2021-11-09T08:12:52Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the SCIM credential.
     *
     * @example scimcred-004whl0kvfwcypbi****
     *
     * @var string
     */
    public $credentialId;

    /**
     * @description The SCIM credential.
     *
     * >  The SCIM credential is returned only when it is created. After the SCIM credential is created, you cannot query it. Keep the SCIM credential confidential.
     * @example 8aAJCtpbyPJ8saXeYDgyw****
     *
     * @var string
     */
    public $credentialSecret;

    /**
     * @description The type of the SCIM credential.
     *
     * @example BearerToken
     *
     * @var string
     */
    public $credentialType;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The time when the SCIM credential expires.
     *
     * @example 2022-11-09T08:12:52Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The status of the SCIM credential. The value is fixed as Enabled, which indicates that the SCIM credential is enabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'       => 'CreateTime',
        'credentialId'     => 'CredentialId',
        'credentialSecret' => 'CredentialSecret',
        'credentialType'   => 'CredentialType',
        'directoryId'      => 'DirectoryId',
        'expireTime'       => 'ExpireTime',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SCIMServerCredential
     */
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
