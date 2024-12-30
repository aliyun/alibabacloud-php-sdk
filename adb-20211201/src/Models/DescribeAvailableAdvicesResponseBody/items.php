<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAvailableAdvicesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 20221124
     *
     * @var string
     */
    public $adviceDate;

    /**
     * @example dcd04135-0925-4aed-a5a7-e7d92cb1****
     *
     * @var string
     */
    public $adviceId;

    /**
     * @example INDEX
     *
     * @var string
     */
    public $adviceType;

    /**
     * @var string
     */
    public $benefit;

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
     * @var string
     */
    public $reason;

    /**
     * @example alter table `schema1`.`table1` drop key col1_1_idx
     *
     * @var string
     */
    public $SQL;

    /**
     * @example adb_demo
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 10192
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'adviceDate' => 'AdviceDate',
        'adviceId'   => 'AdviceId',
        'adviceType' => 'AdviceType',
        'benefit'    => 'Benefit',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'reason'     => 'Reason',
        'SQL'        => 'SQL',
        'schemaName' => 'SchemaName',
        'tableName'  => 'TableName',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->adviceId) {
            $res['AdviceId'] = $this->adviceId;
        }
        if (null !== $this->adviceType) {
            $res['AdviceType'] = $this->adviceType;
        }
        if (null !== $this->benefit) {
            $res['Benefit'] = $this->benefit;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceDate'])) {
            $model->adviceDate = $map['AdviceDate'];
        }
        if (isset($map['AdviceId'])) {
            $model->adviceId = $map['AdviceId'];
        }
        if (isset($map['AdviceType'])) {
            $model->adviceType = $map['AdviceType'];
        }
        if (isset($map['Benefit'])) {
            $model->benefit = $map['Benefit'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
