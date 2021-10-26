<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $certificatePrivateKey;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainBindingStatus;

    /**
     * @var string
     */
    public $domainRemark;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $domainWebSocketStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $certificateBody;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var string
     */
    public $domainCNAMEStatus;
    protected $_name = [
        'certificatePrivateKey' => 'CertificatePrivateKey',
        'domainName'            => 'DomainName',
        'domainBindingStatus'   => 'DomainBindingStatus',
        'domainRemark'          => 'DomainRemark',
        'certificateId'         => 'CertificateId',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
        'requestId'             => 'RequestId',
        'certificateName'       => 'CertificateName',
        'domainLegalStatus'     => 'DomainLegalStatus',
        'groupId'               => 'GroupId',
        'certificateBody'       => 'CertificateBody',
        'subDomain'             => 'SubDomain',
        'domainCNAMEStatus'     => 'DomainCNAMEStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificatePrivateKey) {
            $res['CertificatePrivateKey'] = $this->certificatePrivateKey;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
        }
        if (null !== $this->domainRemark) {
            $res['DomainRemark'] = $this->domainRemark;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->domainWebSocketStatus) {
            $res['DomainWebSocketStatus'] = $this->domainWebSocketStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->certificateBody) {
            $res['CertificateBody'] = $this->certificateBody;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->domainCNAMEStatus) {
            $res['DomainCNAMEStatus'] = $this->domainCNAMEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificatePrivateKey'])) {
            $model->certificatePrivateKey = $map['CertificatePrivateKey'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
        }
        if (isset($map['DomainRemark'])) {
            $model->domainRemark = $map['DomainRemark'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['DomainWebSocketStatus'])) {
            $model->domainWebSocketStatus = $map['DomainWebSocketStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['CertificateBody'])) {
            $model->certificateBody = $map['CertificateBody'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['DomainCNAMEStatus'])) {
            $model->domainCNAMEStatus = $map['DomainCNAMEStatus'];
        }

        return $model;
    }
}
