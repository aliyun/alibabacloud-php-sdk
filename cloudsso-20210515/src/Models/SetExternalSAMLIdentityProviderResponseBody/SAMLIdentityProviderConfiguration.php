<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetExternalSAMLIdentityProviderResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLIdentityProviderConfiguration extends Model
{
    /**
     * @description The ID of the SAML signing certificate.
     *
     * @var string[]
     */
    public $certificateIds;

    /**
     * @description The time when the IdP was configured for the first time.
     *
     * @example 2021-11-10T02:57:16Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The metadata file of the IdP. The value of this parameter is Base64-encoded.
     *
     * @example PD94bWwgdmVyc2lvbj0iMS4****
     *
     * @var string
     */
    public $encodedMetadataDocument;

    /**
     * @description The entity ID of the IdP.
     *
     * @example http://www.okta.com/exk3qwgtjhetR2Od****
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The logon URL of the IdP.
     *
     * @example https://dev-xxxxxx.okta.com/app/dev-xxxxxx_cloudssodemo_1/exk3qwgtjhetR2Od****\/sso/saml
     *
     * @var string
     */
    public $loginUrl;

    /**
     * @description The status of SSO logon. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * @example Disabled
     *
     * @var string
     */
    public $SSOStatus;

    /**
     * @description The time when the IdP configurations were last modified.
     *
     * @example 2021-11-10T02:57:16Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description Indicates whether CloudSSO needs to sign SAML requests. The requests are sent when users log on to the CloudSSO user portal to initiate SAML-based SSO. Valid values:
     *
     *   true: yes
     *   false: no (default)
     *
     * @example false
     *
     * @var bool
     */
    public $wantRequestSigned;
    protected $_name = [
        'certificateIds'          => 'CertificateIds',
        'createTime'              => 'CreateTime',
        'directoryId'             => 'DirectoryId',
        'encodedMetadataDocument' => 'EncodedMetadataDocument',
        'entityId'                => 'EntityId',
        'loginUrl'                => 'LoginUrl',
        'SSOStatus'               => 'SSOStatus',
        'updateTime'              => 'UpdateTime',
        'wantRequestSigned'       => 'WantRequestSigned',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateIds) {
            $res['CertificateIds'] = $this->certificateIds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->encodedMetadataDocument) {
            $res['EncodedMetadataDocument'] = $this->encodedMetadataDocument;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->loginUrl) {
            $res['LoginUrl'] = $this->loginUrl;
        }
        if (null !== $this->SSOStatus) {
            $res['SSOStatus'] = $this->SSOStatus;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->wantRequestSigned) {
            $res['WantRequestSigned'] = $this->wantRequestSigned;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SAMLIdentityProviderConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateIds'])) {
            if (!empty($map['CertificateIds'])) {
                $model->certificateIds = $map['CertificateIds'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EncodedMetadataDocument'])) {
            $model->encodedMetadataDocument = $map['EncodedMetadataDocument'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['LoginUrl'])) {
            $model->loginUrl = $map['LoginUrl'];
        }
        if (isset($map['SSOStatus'])) {
            $model->SSOStatus = $map['SSOStatus'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['WantRequestSigned'])) {
            $model->wantRequestSigned = $map['WantRequestSigned'];
        }

        return $model;
    }
}
