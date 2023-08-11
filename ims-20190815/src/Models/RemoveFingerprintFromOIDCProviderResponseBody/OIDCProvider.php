<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\RemoveFingerprintFromOIDCProviderResponseBody;

use AlibabaCloud\Tea\Model;

class OIDCProvider extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the OIDC IdP.
     *
     * @example acs:ram::177242285274****:oidc-provider/TestOIDCProvider
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the client. If multiple client IDs are returned, the client IDs are separated by commas (,).
     *
     * @example 0oa4u6l8x5WoaVbd****
     *
     * @var string
     */
    public $clientIds;

    /**
     * @description The time when the OIDC IdP was created. The time is displayed in UTC.
     *
     * @example 2021-11-11T06:56:03Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the OIDC IdP.
     *
     * @example This is a new OIDC Provider.
     *
     * @var string
     */
    public $description;

    /**
     * @description The fingerprint of the HTTPS certificate. If multiple fingerprints are returned, the fingerprints are separated by commas (,).
     *
     * @example 5938fd4d98bab03faadb97b34396831e3780****
     *
     * @var string
     */
    public $fingerprints;

    /**
     * @description The timestamp when the OIDC IdP was created.
     *
     * @example 1636613763000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The timestamp when the OIDC IdP was modified.
     *
     * @example 1636706309000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $issuanceLimitTime;

    /**
     * @description The URL of the issuer.
     *
     * @example https://dev-xxxxxx.okta.com
     *
     * @var string
     */
    public $issuerUrl;

    /**
     * @description The name of the OIDC IdP.
     *
     * @example TestOIDCProvider
     *
     * @var string
     */
    public $OIDCProviderName;

    /**
     * @description The time when the OIDC IdP was modified. The time is displayed in UTC.
     *
     * @example 2021-11-12T08:38:29Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'arn'               => 'Arn',
        'clientIds'         => 'ClientIds',
        'createDate'        => 'CreateDate',
        'description'       => 'Description',
        'fingerprints'      => 'Fingerprints',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'issuanceLimitTime' => 'IssuanceLimitTime',
        'issuerUrl'         => 'IssuerUrl',
        'OIDCProviderName'  => 'OIDCProviderName',
        'updateDate'        => 'UpdateDate',
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
        if (null !== $this->clientIds) {
            $res['ClientIds'] = $this->clientIds;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fingerprints) {
            $res['Fingerprints'] = $this->fingerprints;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OIDCProvider
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['ClientIds'])) {
            $model->clientIds = $map['ClientIds'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Fingerprints'])) {
            $model->fingerprints = $map['Fingerprints'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
