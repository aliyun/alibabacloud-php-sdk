<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\RemoveFingerprintFromOIDCProviderResponseBody;

use AlibabaCloud\Tea\Model;

class OIDCProvider extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $clientIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fingerprints;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $issuerUrl;

    /**
     * @var string
     */
    public $OIDCProviderName;
    protected $_name = [
        'arn'              => 'Arn',
        'clientIds'        => 'ClientIds',
        'description'      => 'Description',
        'fingerprints'     => 'Fingerprints',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'issuerUrl'        => 'IssuerUrl',
        'OIDCProviderName' => 'OIDCProviderName',
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

        return $model;
    }
}
