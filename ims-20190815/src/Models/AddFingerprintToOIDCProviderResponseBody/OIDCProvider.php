<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\AddFingerprintToOIDCProviderResponseBody;

use AlibabaCloud\Tea\Model;

class OIDCProvider extends Model
{
    /**
     * @example acs:ram::177242285274****:oidc-provider/OIDCProvider
     *
     * @var string
     */
    public $arn;

    /**
     * @example 498469743454717****
     *
     * @var string
     */
    public $clientIds;

    /**
     * @example 2021-11-11T06:56:03Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @example This is a new OIDC Provider.
     *
     * @var string
     */
    public $description;

    /**
     * @example 502ef2deeb3c5b13ea4c3d5193629309e231****,902ef2deeb3c5b13ea4c3d5193629309e231****
     *
     * @var string
     */
    public $fingerprints;

    /**
     * @example 1636613763000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1636706309000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example https://dev-xxxxxx.okta.com
     *
     * @var string
     */
    public $issuerUrl;

    /**
     * @example TestOIDCProvider
     *
     * @var string
     */
    public $OIDCProviderName;

    /**
     * @example 2021-11-12T08:38:29Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'arn'              => 'Arn',
        'clientIds'        => 'ClientIds',
        'createDate'       => 'CreateDate',
        'description'      => 'Description',
        'fingerprints'     => 'Fingerprints',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'issuerUrl'        => 'IssuerUrl',
        'OIDCProviderName' => 'OIDCProviderName',
        'updateDate'       => 'UpdateDate',
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
