<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListSCIMServerCredentialsResponseBody;

use AlibabaCloud\Tea\Model;

class SCIMServerCredentials extends Model
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
     * @description The status of the SCIM credential. Valid values:
     *
     *   Enabled: The SCIM credential is enabled.
     *   Disabled: The SCIM credential is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'credentialId'   => 'CredentialId',
        'credentialType' => 'CredentialType',
        'directoryId'    => 'DirectoryId',
        'expireTime'     => 'ExpireTime',
        'status'         => 'Status',
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
     * @return SCIMServerCredentials
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
