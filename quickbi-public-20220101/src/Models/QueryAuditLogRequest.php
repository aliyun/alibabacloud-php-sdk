<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryAuditLogRequest extends Model
{
    /**
     * @var string
     */
    public $accessSourceFlag;

    /**
     * @description End date of the query, format ("yyyyMMdd").
     *
     * This parameter is required.
     *
     * @example 20240604
     *
     * @var string
     */
    public $endDate;

    /**
     * @description Log type:
     * - dataView - Access
     * - function - Operation
     * - permission - Permission
     *
     * This parameter is required.
     *
     * @example function
     *
     * @var string
     */
    public $logType;

    /**
     * @description Operator\\"s user ID.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0***
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description Permission/Access/Operation type, empty - default all;
     *
     * Refer to the audit log code values, send multiple values separated by English commas.
     *
     * @example MODIFY
     *
     * @var string
     */
    public $operatorTypes;

    /**
     * @description Resource type, refer to the work type.
     *
     * @example cube
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Start date of the query, format ("yyyyMMdd"), cannot be earlier than 90 days from the current time.
     *
     * This parameter is required.
     *
     * @example 20240504
     *
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $userAccessDevice;

    /**
     * @description Workspace ID, the ID of the workspace to which the logs to be queried belong.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return QueryAuditLogRequest
     */
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
