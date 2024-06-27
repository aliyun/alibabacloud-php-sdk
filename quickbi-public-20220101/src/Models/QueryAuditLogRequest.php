<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryAuditLogRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1715856218001
     *
     * @var string
     */
    public $endDate;

    /**
     * @description This parameter is required.
     *
     * @example function
     *
     * @var string
     */
    public $logType;

    /**
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0***
     *
     * @var string
     */
    public $operatorId;

    /**
     * @example MODIFY
     *
     * @var string
     */
    public $operatorTypes;

    /**
     * @example cube
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description This parameter is required.
     *
     * @example 1715856218001
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'endDate'       => 'EndDate',
        'logType'       => 'LogType',
        'operatorId'    => 'OperatorId',
        'operatorTypes' => 'OperatorTypes',
        'resourceType'  => 'ResourceType',
        'startDate'     => 'StartDate',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
