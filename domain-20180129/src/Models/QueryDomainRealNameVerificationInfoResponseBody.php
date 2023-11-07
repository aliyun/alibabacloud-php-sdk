<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryDomainRealNameVerificationInfoResponseBody extends Model
{
    /**
     * @example aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example dGVzdA==
     *
     * @var string
     */
    public $identityCredential;

    /**
     * @example 5****************9
     *
     * @var string
     */
    public $identityCredentialNo;

    /**
     * @example SFZ
     *
     * @var string
     */
    public $identityCredentialType;

    /**
     * @example http://dbu-nap-p.oss-cn-hangzhou.aliyuncs.com/20190219/140692647406xxxx_5d6baea3e7314fd986afdd86e33exxxx.jpg
     *
     * @var string
     */
    public $identityCredentialUrl;

    /**
     * @example S2019270W570****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 4DF9D693-0D5B-4EB7-8922-7ECA6BD59314
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2018-03-28 00:41:42
     *
     * @var string
     */
    public $submissionDate;
    protected $_name = [
        'domainName'             => 'DomainName',
        'identityCredential'     => 'IdentityCredential',
        'identityCredentialNo'   => 'IdentityCredentialNo',
        'identityCredentialType' => 'IdentityCredentialType',
        'identityCredentialUrl'  => 'IdentityCredentialUrl',
        'instanceId'             => 'InstanceId',
        'requestId'              => 'RequestId',
        'submissionDate'         => 'SubmissionDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->identityCredential) {
            $res['IdentityCredential'] = $this->identityCredential;
        }
        if (null !== $this->identityCredentialNo) {
            $res['IdentityCredentialNo'] = $this->identityCredentialNo;
        }
        if (null !== $this->identityCredentialType) {
            $res['IdentityCredentialType'] = $this->identityCredentialType;
        }
        if (null !== $this->identityCredentialUrl) {
            $res['IdentityCredentialUrl'] = $this->identityCredentialUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->submissionDate) {
            $res['SubmissionDate'] = $this->submissionDate;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IdentityCredential'])) {
            $model->identityCredential = $map['IdentityCredential'];
        }
        if (isset($map['IdentityCredentialNo'])) {
            $model->identityCredentialNo = $map['IdentityCredentialNo'];
        }
        if (isset($map['IdentityCredentialType'])) {
            $model->identityCredentialType = $map['IdentityCredentialType'];
        }
        if (isset($map['IdentityCredentialUrl'])) {
            $model->identityCredentialUrl = $map['IdentityCredentialUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubmissionDate'])) {
            $model->submissionDate = $map['SubmissionDate'];
        }

        return $model;
    }
}
