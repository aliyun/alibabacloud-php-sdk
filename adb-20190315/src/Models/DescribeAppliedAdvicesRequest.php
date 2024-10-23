<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppliedAdvicesRequest extends Model
{
    /**
     * @description The type of the suggestion. Valid values:
     *
     *   **INDEX**: index optimization.
     *   **TIERING**: hot and cold data optimization.
     *
     * @example INDEX
     *
     * @var string
     */
    public $adviceType;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition cluster.
     *
     * This parameter is required.
     * @example am-uf6g8w25jacm7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyyMMdd format. The time must be in UTC.
     *
     * @example 20220824
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The keyword that is used to query information by table name.
     *
     * @example you_table_name
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The display language of the suggestion. Valid values:
     *
     *   **zh** (default): simplified Chinese.
     *   **en**: English.
     *   **ja**: Japanese.
     *   **zh-tw**: traditional Chinese.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The order by which to sort query results. Specify the parameter value in the JSON format. Example: `[{"Field":"SchemaName","Type":"Asc"}]`.
     *
     *   `Field` specifies the field by which to sort the query results. Valid values:
     *
     *   `SchemaName`: the name of the database.
     *   `TableName`: the name of the table.
     *   `JobStatus`: the status of the BUILD job that is triggered on the table.
     *   `SubmitTime`: the time when the suggestion was submitted.
     *   `Benefit`: the expected benefits of the applied optimization suggestion.
     *
     *   `Type` specifies the sorting order. Valid values:
     *
     *   `Asc`: ascending order.
     *   `Desc`: descending order.
     *
     * >  If you do not specify this parameter, optimization suggestions are sorted in descending order based on the submission time.
     * @example [{"Field":"Benefit","Type":"Desc"}]
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values:
     *
     *   **30** (default)
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the cluster.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the table in the **DatabaseName.TableName** format.
     *
     * @example tpch.lineitem
     *
     * @var string
     */
    public $schemaTableName;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyyMMdd format. The time must be in UTC.
     *
     * @example 20220811
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'adviceType'      => 'AdviceType',
        'DBClusterId'     => 'DBClusterId',
        'endTime'         => 'EndTime',
        'keyword'         => 'Keyword',
        'lang'            => 'Lang',
        'order'           => 'Order',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'schemaTableName' => 'SchemaTableName',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceType) {
            $res['AdviceType'] = $this->adviceType;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->schemaTableName) {
            $res['SchemaTableName'] = $this->schemaTableName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppliedAdvicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceType'])) {
            $model->adviceType = $map['AdviceType'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SchemaTableName'])) {
            $model->schemaTableName = $map['SchemaTableName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
