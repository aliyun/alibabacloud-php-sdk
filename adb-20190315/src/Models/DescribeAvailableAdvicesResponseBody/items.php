<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableAdvicesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the suggestion was generated. The time follows the ISO 8601 standard in the yyyyMMdd format. The time is displayed in UTC.
     *
     * @example 20221124
     *
     * @var string
     */
    public $adviceDate;

    /**
     * @description The suggestion ID.
     *
     * @example dcd04135-0925-4aed-a5a7-e7d92cb1****
     *
     * @var string
     */
    public $adviceId;

    /**
     * @description The type of the suggestion. Valid values:
     *
     *   **Index**: index optimization.
     *   **Tiering**: hot and cold data optimization.
     *
     * @example Index
     *
     * @var string
     */
    public $adviceType;

    /**
     * @description The benefit of the suggestion.
     *
     * @example 0.4 GB of storage saved
     *
     * @var string
     */
    public $benefit;

    /**
     * @description The page number. Pages start from 1. Default value: 1.
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
     * @description The reason why the suggestion was generated.
     *
     * @example Unused for 15 days, historical usage less than 1%
     *
     * @var string
     */
    public $reason;

    /**
     * @description The SQL statement that is used to apply the suggestion.
     *
     * @example alter table `schema1`.`table1` drop key col1_1_idx
     *
     * @var string
     */
    public $SQL;

    /**
     * @description The name of the schema.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name of the table.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The total number of entries returned. Minimum value: 0. Default value: 0.
     *
     * @example 30
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
