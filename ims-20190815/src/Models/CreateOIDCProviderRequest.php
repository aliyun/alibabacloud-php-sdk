<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class CreateOIDCProviderRequest extends Model
{
    /**
     * @description The ID of the client, which is provided by the external IdP Okta. If you want to specify multiple client IDs, separate the client IDs with commas (,).
     *
     * The client ID can be up to 64 characters in length.
     * @example 498469743454717****
     *
     * @var string
     */
    public $clientIds;

    /**
     * @description The description of the OIDC IdP.
     *
     * The description can be up to 256 characters in length.
     * @example This is an OIDC Provider.
     *
     * @var string
     */
    public $description;

    /**
     * @description The fingerprint of the HTTPS certificate, which is provided by the external IdP Okta. If you want to specify multiple fingerprints, separate the fingerprints with commas (,).
     *
     * The fingerprint can be up to 40 characters in length.
     * @example 902ef2deeb3c5b13ea4c3d5193629309e231****
     *
     * @var string
     */
    public $fingerprints;

    /**
     * @description The earliest time when an external IdP can issue an ID token. If the value of the iat field in the ID token is later than the current time, the request is rejected. Unit: hours. Valid values: 1 to 168.
     *
     * @example 6
     *
     * @var int
     */
    public $issuanceLimitTime;

    /**
     * @description The URL of the issuer, which is provided by the external IdP. The URL of the issuer must be unique within an Alibaba Cloud account.
     *
     * The URL can be up to 255 characters in length.
     * @example https://dev-xxxxxx.okta.com
     *
     * @var string
     */
    public $issuerUrl;

    /**
     * @description The name of the OIDC IdP.
     *
     * The name can be up to 128 characters in length.
     * @example TestOIDCProvider
     *
     * @var string
     */
    public $OIDCProviderName;
    protected $_name = [
        'clientIds'         => 'ClientIds',
        'description'       => 'Description',
        'fingerprints'      => 'Fingerprints',
        'issuanceLimitTime' => 'IssuanceLimitTime',
        'issuerUrl'         => 'IssuerUrl',
        'OIDCProviderName'  => 'OIDCProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIds) {
            $res['ClientIds'] = $this->clientIds;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fingerprints) {
            $res['Fingerprints'] = $this->fingerprints;
        }
        if (null !== $this->issuanceLimitTime) {
            $res['IssuanceLimitTime'] = $this->issuanceLimitTime;
        }
        if (null !== $this->issuerUrl) {
            $res['IssuerUrl'] = $this->issuerUrl;
        }
        if (null !== $this->OIDCProviderName) {
            $res['OIDCProviderName'] = $this->OIDCProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOIDCProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIds'])) {
            $model->clientIds = $map['ClientIds'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Fingerprints'])) {
            $model->fingerprints = $map['Fingerprints'];
        }
        if (isset($map['IssuanceLimitTime'])) {
            $model->issuanceLimitTime = $map['IssuanceLimitTime'];
        }
        if (isset($map['IssuerUrl'])) {
            $model->issuerUrl = $map['IssuerUrl'];
        }
        if (isset($map['OIDCProviderName'])) {
            $model->OIDCProviderName = $map['OIDCProviderName'];
        }

        return $model;
    }
}
