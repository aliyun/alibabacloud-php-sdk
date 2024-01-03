<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListAuthenticationLogsRequest extends Model
{
    /**
     * @example webauth_demo
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @example TOTP
     *
     * @var string
     */
    public $authenticatorType;

    /**
     * @example 0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m
     *
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @example scimcred-003o4e2wqxlaxjmjyz96
     *
     * @var string
     */
    public $credentialId;

    /**
     * @example 1640144294
     *
     * @var int
     */
    public $fromTime;

    /**
     * @example login
     *
     * @var string
     */
    public $logTag;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1640144694
     *
     * @var int
     */
    public $toTime;

    /**
     * @example 10e8c224
     *
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
