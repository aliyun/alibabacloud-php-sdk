<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableAdvicesRequest extends Model
{
    /**
     * @example 20221124
     *
     * @var int
     */
    public $adviceDate;

    /**
     * @example INDEX
     *
     * @var string
     */
    public $adviceType;

    /**
     * @description This parameter is required.
     *
     * @example am-bp198m028ih55****
     *
     * @var string
     */
    public $DBClusterId;

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
