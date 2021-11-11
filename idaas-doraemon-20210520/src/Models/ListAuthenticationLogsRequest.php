<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListAuthenticationLogsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationExternalId;

    /**
     * @var string
     */
    public $authenticatorType;

    /**
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var string
     */
    public $logTag;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $toTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applicationExternalId' => 'ApplicationExternalId',
        'authenticatorType'     => 'AuthenticatorType',
        'authenticatorUuid'     => 'AuthenticatorUuid',
        'credentialId'          => 'CredentialId',
        'fromTime'              => 'FromTime',
        'logTag'                => 'LogTag',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'toTime'                => 'ToTime',
        'userId'                => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->authenticatorType) {
            $res['AuthenticatorType'] = $this->authenticatorType;
        }
        if (null !== $this->authenticatorUuid) {
            $res['AuthenticatorUuid'] = $this->authenticatorUuid;
        }
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }
        if (null !== $this->fromTime) {
            $res['FromTime'] = $this->fromTime;
        }
        if (null !== $this->logTag) {
            $res['LogTag'] = $this->logTag;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->toTime) {
            $res['ToTime'] = $this->toTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuthenticationLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['AuthenticatorType'])) {
            $model->authenticatorType = $map['AuthenticatorType'];
        }
        if (isset($map['AuthenticatorUuid'])) {
            $model->authenticatorUuid = $map['AuthenticatorUuid'];
        }
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }
        if (isset($map['FromTime'])) {
            $model->fromTime = $map['FromTime'];
        }
        if (isset($map['LogTag'])) {
            $model->logTag = $map['LogTag'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ToTime'])) {
            $model->toTime = $map['ToTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
