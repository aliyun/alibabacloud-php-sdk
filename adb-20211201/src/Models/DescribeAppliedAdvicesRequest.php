<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppliedAdvicesRequest extends Model
{
    /**
     * @example INDEX
     *
     * @var string
     */
    public $adviceType;

    /**
     * @description This parameter is required.
     *
     * @example am-uf6g8w25jacm7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 20220824
     *
     * @var int
     */
    public $endTime;

    /**
     * @example you_table_name
     *
     * @var string
     */
    public $keyword;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example [{\\"Field\\":\\"AdviceType\\",\\"Type\\":\\"Desc\\"}]
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example tpch.lineitem
     *
     * @var string
     */
    public $schemaTableName;

    /**
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
