<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizInfoByDomainResponseBody\module;

use AlibabaCloud\Tea\Model;

class domainSpecialBizCredentials extends Model
{
    /**
     * @description The ID of the associated workflow.
     *
     * @example T20220831150014000001
     *
     * @var int
     */
    public $bizId;

    /**
     * @description The certificate number.
     *
     * @example 4111111111111110**
     *
     * @var string
     */
    public $credentialNo;

    /**
     * @description The certificate type.
     *
     * @example SFZ
     *
     * @var string
     */
    public $credentialType;

    /**
     * @description The certificate URL.
     *
     * @example http://test.oss-cn-hangzhou.aliyuncs.com/20170522/1219541161213057_070445190.jpg
     *
     * @var string
     */
    public $credentialUrl;

    /**
     * @description The domain name.
     *
     * @example test003.cn
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Indicates whether the certificate belongs to the registrant.
     *
     * @example 1
     *
     * @var int
     */
    public $holderCert;

    /**
     * @description The instance ID.
     *
     * @example S20172315BJ37809
     *
     * @var string
     */
    public $saleId;
    protected $_name = [
        'bizId'          => 'BizId',
        'credentialNo'   => 'CredentialNo',
        'credentialType' => 'CredentialType',
        'credentialUrl'  => 'CredentialUrl',
        'domainName'     => 'DomainName',
        'holderCert'     => 'HolderCert',
        'saleId'         => 'SaleId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return domainSpecialBizCredentials
     */
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
