<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class CreateOIDCProviderRequest extends Model
{
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
     * @var int
     */
    public $issuanceLimitTime;
    /**
     * @var string
     */
    public $issuerUrl;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
