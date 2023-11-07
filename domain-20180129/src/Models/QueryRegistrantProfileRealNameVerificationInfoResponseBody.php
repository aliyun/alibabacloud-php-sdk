<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryRegistrantProfileRealNameVerificationInfoResponseBody extends Model
{
    /**
     * @example dGVzdA==
     *
     * @var string
     */
    public $identityCredential;

    /**
     * @example 4111111111111110**
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
     * @example http://test.oss-cn-hangzhou.aliyuncs.com/20170522/1219541161213057_070445190.jpg
     *
     * @var string
     */
    public $identityCredentialUrl;

    /**
     * @example 2017-05-22 19:04:49
     *
     * @var string
     */
    public $modificationDate;

    /**
     * @example 1234567
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @example 4D73432C-7600-4779-ACBB-C3B5CA145D32
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2017-05-22 19:04:49
     *
     * @var string
     */
    public $submissionDate;
    protected $_name = [
        'identityCredential'     => 'IdentityCredential',
        'identityCredentialNo'   => 'IdentityCredentialNo',
        'identityCredentialType' => 'IdentityCredentialType',
        'identityCredentialUrl'  => 'IdentityCredentialUrl',
        'modificationDate'       => 'ModificationDate',
        'registrantProfileId'    => 'RegistrantProfileId',
        'requestId'              => 'RequestId',
        'submissionDate'         => 'SubmissionDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->modificationDate) {
            $res['ModificationDate'] = $this->modificationDate;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
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
     * @return QueryRegistrantProfileRealNameVerificationInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ModificationDate'])) {
            $model->modificationDate = $map['ModificationDate'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
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
