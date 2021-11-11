<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListAuthenticatorOpsLogsRequest extends Model
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
     * @var int
     */
    public $fromTime;

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
        'fromTime'              => 'FromTime',
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
        if (null !== $this->fromTime) {
            $res['FromTime'] = $this->fromTime;
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
     * @return ListAuthenticatorOpsLogsRequest
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
        if (isset($map['FromTime'])) {
            $model->fromTime = $map['FromTime'];
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
