<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class SetExternalSAMLIdentityProviderRequest extends Model
{
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
     * The file is provided by the IdP that supports SAML 2.0.
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
     *   Disabled (default)
     *
     * @example Disabled
     *
     * @var string
     */
    public $SSOStatus;

    /**
     * @description Specifies whether CloudSSO needs to sign SAML requests. The requests are sent when users log on to the CloudSSO user portal to initiate SAML-based SSO. Valid values:
     *
     *   true: yes
     *   false: no (default)
     *
     * @example false
     *
     * @var bool
     */
    public $wantRequestSigned;

    /**
     * @description The X.509 certificate in the PEM format. If you specify this parameter, all existing certificates are replaced.
     *
     * @example MIIC8DCCAdigAwIBAgIQP9eomUYGeoND****
     *
     * @var string
     */
    public $x509Certificate;
    protected $_name = [
        'directoryId'             => 'DirectoryId',
        'encodedMetadataDocument' => 'EncodedMetadataDocument',
        'entityId'                => 'EntityId',
        'loginUrl'                => 'LoginUrl',
        'SSOStatus'               => 'SSOStatus',
        'wantRequestSigned'       => 'WantRequestSigned',
        'x509Certificate'         => 'X509Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->wantRequestSigned) {
            $res['WantRequestSigned'] = $this->wantRequestSigned;
        }
        if (null !== $this->x509Certificate) {
            $res['X509Certificate'] = $this->x509Certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetExternalSAMLIdentityProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['WantRequestSigned'])) {
            $model->wantRequestSigned = $map['WantRequestSigned'];
        }
        if (isset($map['X509Certificate'])) {
            $model->x509Certificate = $map['X509Certificate'];
        }

        return $model;
    }
}
