<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class QueryRegistrantProfileRealNameVerificationInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $identityCredential;

    /**
     * @var string
     */
    public $identityCredentialNo;

    /**
     * @var string
     */
    public $identityCredentialType;

    /**
     * @var string
     */
    public $identityCredentialUrl;

    /**
     * @var string
     */
    public $modificationDate;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var string
     */
    public $requestId;

    /**
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
