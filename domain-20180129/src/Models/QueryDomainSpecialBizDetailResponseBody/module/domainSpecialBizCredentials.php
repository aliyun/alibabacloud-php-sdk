<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class domainSpecialBizCredentials extends Model
{
    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $credentialUrl;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $holderCert;

    /**
     * @var string
     */
    public $saleId;
    protected $_name = [
        'bizId' => 'BizId',
        'credentialNo' => 'CredentialNo',
        'credentialType' => 'CredentialType',
        'credentialUrl' => 'CredentialUrl',
        'domainName' => 'DomainName',
        'holderCert' => 'HolderCert',
        'saleId' => 'SaleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }

        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }

        if (null !== $this->credentialUrl) {
            $res['CredentialUrl'] = $this->credentialUrl;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->holderCert) {
            $res['HolderCert'] = $this->holderCert;
        }

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }

        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }

        if (isset($map['CredentialUrl'])) {
            $model->credentialUrl = $map['CredentialUrl'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['HolderCert'])) {
            $model->holderCert = $map['HolderCert'];
        }

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        return $model;
    }
}
