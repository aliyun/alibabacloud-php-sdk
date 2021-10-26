<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody\customDomains;

use AlibabaCloud\Tea\Model;

class domainItem extends Model
{
    /**
     * @var string
     */
    public $bindStageName;

    /**
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $customDomainType;

    /**
     * @var string
     */
    public $domainCNAMEStatus;

    /**
     * @var string
     */
    public $wildcardDomainPatterns;

    /**
     * @var string
     */
    public $domainBindingStatus;

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
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'bindStageName'          => 'BindStageName',
        'domainLegalStatus'      => 'DomainLegalStatus',
        'certificateName'        => 'CertificateName',
        'customDomainType'       => 'CustomDomainType',
        'domainCNAMEStatus'      => 'DomainCNAMEStatus',
        'wildcardDomainPatterns' => 'WildcardDomainPatterns',
        'domainBindingStatus'    => 'DomainBindingStatus',
        'domainName'             => 'DomainName',
        'domainRemark'           => 'DomainRemark',
        'domainWebSocketStatus'  => 'DomainWebSocketStatus',
        'certificateId'          => 'CertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindStageName) {
            $res['BindStageName'] = $this->bindStageName;
        }
        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->customDomainType) {
            $res['CustomDomainType'] = $this->customDomainType;
        }
        if (null !== $this->domainCNAMEStatus) {
            $res['DomainCNAMEStatus'] = $this->domainCNAMEStatus;
        }
        if (null !== $this->wildcardDomainPatterns) {
            $res['WildcardDomainPatterns'] = $this->wildcardDomainPatterns;
        }
        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
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
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindStageName'])) {
            $model->bindStageName = $map['BindStageName'];
        }
        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CustomDomainType'])) {
            $model->customDomainType = $map['CustomDomainType'];
        }
        if (isset($map['DomainCNAMEStatus'])) {
            $model->domainCNAMEStatus = $map['DomainCNAMEStatus'];
        }
        if (isset($map['WildcardDomainPatterns'])) {
            $model->wildcardDomainPatterns = $map['WildcardDomainPatterns'];
        }
        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
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
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
