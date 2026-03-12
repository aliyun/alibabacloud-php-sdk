<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class SaveTaskForSubmittingDomainNameCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $credential;

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
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'credential' => 'Credential',
        'credentialNo' => 'CredentialNo',
        'credentialType' => 'CredentialType',
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'saleId' => 'SaleId',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credential) {
            $res['Credential'] = $this->credential;
        }

        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }

        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['Credential'])) {
            $model->credential = $map['Credential'];
        }

        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }

        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
