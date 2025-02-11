<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DescribeAvailableAdvicesRequest extends Model
{
    /**
     * @var int
     */
    public $adviceDate;
    /**
     * @var string
     */
    public $adviceType;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $order;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
