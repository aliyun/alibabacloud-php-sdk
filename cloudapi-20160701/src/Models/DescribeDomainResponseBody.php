<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $certificateBody;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $domainBindingStatus;

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
    public $domainNameResolution;

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
    public $groupId;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'certificateBody'       => 'CertificateBody',
        'certificateId'         => 'CertificateId',
        'certificateName'       => 'CertificateName',
        'domainBindingStatus'   => 'DomainBindingStatus',
        'domainLegalStatus'     => 'DomainLegalStatus',
        'domainName'            => 'DomainName',
        'domainNameResolution'  => 'DomainNameResolution',
        'domainRemark'          => 'DomainRemark',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
        'groupId'               => 'GroupId',
        'privateKey'            => 'PrivateKey',
        'requestId'             => 'RequestId',
        'subDomain'             => 'SubDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateBody) {
            $res['CertificateBody'] = $this->certificateBody;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
        }
        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameResolution) {
            $res['DomainNameResolution'] = $this->domainNameResolution;
        }
        if (null !== $this->domainRemark) {
            $res['DomainRemark'] = $this->domainRemark;
        }
        if (null !== $this->domainWebSocketStatus) {
            $res['DomainWebSocketStatus'] = $this->domainWebSocketStatus;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
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
        if (isset($map['CertificateBody'])) {
            $model->certificateBody = $map['CertificateBody'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
        }
        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameResolution'])) {
            $model->domainNameResolution = $map['DomainNameResolution'];
        }
        if (isset($map['DomainRemark'])) {
            $model->domainRemark = $map['DomainRemark'];
        }
        if (isset($map['DomainWebSocketStatus'])) {
            $model->domainWebSocketStatus = $map['DomainWebSocketStatus'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
