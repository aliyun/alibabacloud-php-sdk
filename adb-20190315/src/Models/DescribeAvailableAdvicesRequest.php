<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableAdvicesRequest extends Model
{
    /**
     * @description The date when the suggestion is generated. Specify the date in the yyyyMMdd format. The date must be in UTC.
     *
     * This parameter is required.
     * @example 20221124
     *
     * @var int
     */
    public $adviceDate;

    /**
     * @description The type of the suggestion. Valid values:
     *
     *   **INDEX**: index optimization.
     *   **TIERING**: hot and cold data optimization.
     *
     * @example Index
     *
     * @var string
     */
    public $adviceType;

    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example am-bp198m028ih55****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The keyword that is used to query information by table name.
     *
     * @example you_table_name
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The display language of the suggestion. Default value: zh. Valid values:
     *
     *   **zh**: simplified Chinese
     *   **en**: English
     *   **ja**: Japanese
     *   **zh-tw**: traditional Chinese
     *
     * This parameter is required.
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
     *   `Benefit`: the expected benefits of the applied optimization suggestion.
     *
     *   `Type` specifies the sorting order. Valid values:
     *
     *   `Asc`: ascending order.
     *   `Desc`: descending order.
     *
     * >  If you do not specify this parameter, the query results are sorted in descending order based on the Benefit field.
     * @example [{"Field":"Benefit","Type":"Desc"}]
     *
     * @var string
     */
    public $order;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 30. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * This parameter is required.
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
    protected $_name = [
        'adviceDate'      => 'AdviceDate',
        'adviceType'      => 'AdviceType',
        'DBClusterId'     => 'DBClusterId',
        'keyword'         => 'Keyword',
        'lang'            => 'Lang',
        'order'           => 'Order',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'schemaTableName' => 'SchemaTableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceDate) {
            $res['AdviceDate'] = $this->adviceDate;
        }
        if (null !== $this->adviceType) {
            $res['AdviceType'] = $this->adviceType;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableAdvicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceDate'])) {
            $model->adviceDate = $map['AdviceDate'];
        }
        if (isset($map['AdviceType'])) {
            $model->adviceType = $map['AdviceType'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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

        return $model;
    }
}
