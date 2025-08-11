<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class QueryAuditLogRequest extends Model
{
    /**
     * @var string
     */
    public $accessSourceFlag;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $operatorTypes;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $userAccessDevice;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessSourceFlag' => 'AccessSourceFlag',
        'endDate' => 'EndDate',
        'logType' => 'LogType',
        'operatorId' => 'OperatorId',
        'operatorTypes' => 'OperatorTypes',
        'resourceType' => 'ResourceType',
        'startDate' => 'StartDate',
        'userAccessDevice' => 'UserAccessDevice',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessSourceFlag) {
            $res['AccessSourceFlag'] = $this->accessSourceFlag;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->operatorTypes) {
            $res['OperatorTypes'] = $this->operatorTypes;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->userAccessDevice) {
            $res['UserAccessDevice'] = $this->userAccessDevice;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessSourceFlag'])) {
            $model->accessSourceFlag = $map['AccessSourceFlag'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['OperatorTypes'])) {
            $model->operatorTypes = $map['OperatorTypes'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['UserAccessDevice'])) {
            $model->userAccessDevice = $map['UserAccessDevice'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
