<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryComponentPerformanceRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $costTimeAvgMin;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example sevenDays
     *
     * @var string
     */
    public $queryType;

    /**
     * @example 6b407e50-e774-406b-9956-da2425c2****
     *
     * @var string
     */
    public $reportId;

    /**
     * @example report
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 89713491-cb4f-4579-b889-e82c35f1****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'costTimeAvgMin' => 'CostTimeAvgMin',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'queryType'      => 'QueryType',
        'reportId'       => 'ReportId',
        'resourceType'   => 'ResourceType',
        'workspaceId'    => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTimeAvgMin) {
            $res['CostTimeAvgMin'] = $this->costTimeAvgMin;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryComponentPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTimeAvgMin'])) {
            $model->costTimeAvgMin = $map['CostTimeAvgMin'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
