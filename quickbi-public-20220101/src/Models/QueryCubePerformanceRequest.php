<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryCubePerformanceRequest extends Model
{
    /**
     * @description The average duration (minutes).
     *
     * @example 1
     *
     * @var int
     */
    public $costTimeAvgMin;

    /**
     * @description The dataset ID.
     *
     * @example 7c7223ae-****-3c744528014b
     *
     * @var string
     */
    public $cubeId;

    /**
     * @description The current page number of the workspace member list:
     *
     *   Pages start from page 1.
     *   Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of rows per page in a paged query.
     *
     *   Default value: 10.
     *   Maximum value: 1,000.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query type. Valid values:
     *
     *   **lastDay**: Yesterday
     *   **sevenDays**: Within seven days
     *   **thirtyDays**: Within 30 days
     *
     * This parameter is required.
     *
     * @example sevenDays
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'costTimeAvgMin' => 'CostTimeAvgMin',
        'cubeId' => 'CubeId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'queryType' => 'QueryType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costTimeAvgMin) {
            $res['CostTimeAvgMin'] = $this->costTimeAvgMin;
        }
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
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
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCubePerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostTimeAvgMin'])) {
            $model->costTimeAvgMin = $map['CostTimeAvgMin'];
        }
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
