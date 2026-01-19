<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody\customDomains;

use AlibabaCloud\Dara\Model;

class domainItem extends Model
{
    /**
     * @var string
     */
    public $bindStageAlias;

    /**
     * @var string
     */
    public $bindStageName;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var int
     */
    public $certificateValidEnd;

    /**
     * @var int
     */
    public $certificateValidStart;

    /**
     * @var bool
     */
    public $clientCertSDnPassThrough;

    /**
     * @var string
     */
    public $customDomainType;

    /**
     * @var string
     */
    public $domainBindingStatus;

    /**
     * @var string
     */
    public $domainCNAMEStatus;

    /**
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainRemark;

    /**
     * @var string
     */
    public $domainWebSocketStatus;

    /**
     * @var bool
     */
    public $isHttpRedirectToHttps;

    /**
     * @var bool
     */
    public $sslOcspCacheEnable;

    /**
     * @var bool
     */
    public $sslOcspEnable;

    /**
     * @var int
     */
    public $sslVerifyDepth;

    /**
     * @var string
     */
    public $wildcardDomainPatterns;
    protected $_name = [
        'bindStageAlias' => 'BindStageAlias',
        'bindStageName' => 'BindStageName',
        'certificateId' => 'CertificateId',
        'certificateName' => 'CertificateName',
        'certificateValidEnd' => 'CertificateValidEnd',
        'certificateValidStart' => 'CertificateValidStart',
        'clientCertSDnPassThrough' => 'ClientCertSDnPassThrough',
        'customDomainType' => 'CustomDomainType',
        'domainBindingStatus' => 'DomainBindingStatus',
        'domainCNAMEStatus' => 'DomainCNAMEStatus',
        'domainLegalStatus' => 'DomainLegalStatus',
        'domainName' => 'DomainName',
        'domainRemark' => 'DomainRemark',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
        'isHttpRedirectToHttps' => 'IsHttpRedirectToHttps',
        'sslOcspCacheEnable' => 'SslOcspCacheEnable',
        'sslOcspEnable' => 'SslOcspEnable',
        'sslVerifyDepth' => 'SslVerifyDepth',
        'wildcardDomainPatterns' => 'WildcardDomainPatterns',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindStageAlias) {
            $res['BindStageAlias'] = $this->bindStageAlias;
        }

        if (null !== $this->bindStageName) {
            $res['BindStageName'] = $this->bindStageName;
        }

        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }

        if (null !== $this->certificateValidEnd) {
            $res['CertificateValidEnd'] = $this->certificateValidEnd;
        }

        if (null !== $this->certificateValidStart) {
            $res['CertificateValidStart'] = $this->certificateValidStart;
        }

        if (null !== $this->clientCertSDnPassThrough) {
            $res['ClientCertSDnPassThrough'] = $this->clientCertSDnPassThrough;
        }

        if (null !== $this->customDomainType) {
            $res['CustomDomainType'] = $this->customDomainType;
        }

        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
        }

        if (null !== $this->domainCNAMEStatus) {
            $res['DomainCNAMEStatus'] = $this->domainCNAMEStatus;
        }

        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainRemark) {
            $res['DomainRemark'] = $this->domainRemark;
        }

        if (null !== $this->domainWebSocketStatus) {
            $res['DomainWebSocketStatus'] = $this->domainWebSocketStatus;
        }

        if (null !== $this->isHttpRedirectToHttps) {
            $res['IsHttpRedirectToHttps'] = $this->isHttpRedirectToHttps;
        }

        if (null !== $this->sslOcspCacheEnable) {
            $res['SslOcspCacheEnable'] = $this->sslOcspCacheEnable;
        }

        if (null !== $this->sslOcspEnable) {
            $res['SslOcspEnable'] = $this->sslOcspEnable;
        }

        if (null !== $this->sslVerifyDepth) {
            $res['SslVerifyDepth'] = $this->sslVerifyDepth;
        }

        if (null !== $this->wildcardDomainPatterns) {
            $res['WildcardDomainPatterns'] = $this->wildcardDomainPatterns;
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
        if (isset($map['BindStageAlias'])) {
            $model->bindStageAlias = $map['BindStageAlias'];
        }

        if (isset($map['BindStageName'])) {
            $model->bindStageName = $map['BindStageName'];
        }

        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        if (isset($map['CertificateValidEnd'])) {
            $model->certificateValidEnd = $map['CertificateValidEnd'];
        }

        if (isset($map['CertificateValidStart'])) {
            $model->certificateValidStart = $map['CertificateValidStart'];
        }

        if (isset($map['ClientCertSDnPassThrough'])) {
            $model->clientCertSDnPassThrough = $map['ClientCertSDnPassThrough'];
        }

        if (isset($map['CustomDomainType'])) {
            $model->customDomainType = $map['CustomDomainType'];
        }

        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
        }

        if (isset($map['DomainCNAMEStatus'])) {
            $model->domainCNAMEStatus = $map['DomainCNAMEStatus'];
        }

        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainRemark'])) {
            $model->domainRemark = $map['DomainRemark'];
        }

        if (isset($map['DomainWebSocketStatus'])) {
            $model->domainWebSocketStatus = $map['DomainWebSocketStatus'];
        }

        if (isset($map['IsHttpRedirectToHttps'])) {
            $model->isHttpRedirectToHttps = $map['IsHttpRedirectToHttps'];
        }

        if (isset($map['SslOcspCacheEnable'])) {
            $model->sslOcspCacheEnable = $map['SslOcspCacheEnable'];
        }

        if (isset($map['SslOcspEnable'])) {
            $model->sslOcspEnable = $map['SslOcspEnable'];
        }

        if (isset($map['SslVerifyDepth'])) {
            $model->sslVerifyDepth = $map['SslVerifyDepth'];
        }

        if (isset($map['WildcardDomainPatterns'])) {
            $model->wildcardDomainPatterns = $map['WildcardDomainPatterns'];
        }

        return $model;
    }
}
