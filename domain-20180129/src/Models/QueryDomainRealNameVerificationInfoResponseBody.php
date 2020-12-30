<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryDomainRealNameVerificationInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $identityCredentialType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $identityCredential;

    /**
     * @var string
     */
    public $submissionDate;

    /**
     * @var string
     */
    public $identityCredentialNo;

    /**
     * @var string
     */
    public $identityCredentialUrl;
    protected $_name = [
        'identityCredentialType' => 'IdentityCredentialType',
        'requestId'              => 'RequestId',
        'instanceId'             => 'InstanceId',
        'domainName'             => 'DomainName',
        'identityCredential'     => 'IdentityCredential',
        'submissionDate'         => 'SubmissionDate',
        'identityCredentialNo'   => 'IdentityCredentialNo',
        'identityCredentialUrl'  => 'IdentityCredentialUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityCredentialType) {
            $res['IdentityCredentialType'] = $this->identityCredentialType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->identityCredential) {
            $res['IdentityCredential'] = $this->identityCredential;
        }
        if (null !== $this->submissionDate) {
            $res['SubmissionDate'] = $this->submissionDate;
        }
        if (null !== $this->identityCredentialNo) {
            $res['IdentityCredentialNo'] = $this->identityCredentialNo;
        }
        if (null !== $this->identityCredentialUrl) {
            $res['IdentityCredentialUrl'] = $this->identityCredentialUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainRealNameVerificationInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityCredentialType'])) {
            $model->identityCredentialType = $map['IdentityCredentialType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IdentityCredential'])) {
            $model->identityCredential = $map['IdentityCredential'];
        }
        if (isset($map['SubmissionDate'])) {
            $model->submissionDate = $map['SubmissionDate'];
        }
        if (isset($map['IdentityCredentialNo'])) {
            $model->identityCredentialNo = $map['IdentityCredentialNo'];
        }
        if (isset($map['IdentityCredentialUrl'])) {
            $model->identityCredentialUrl = $map['IdentityCredentialUrl'];
        }

        return $model;
    }
}
