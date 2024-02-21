<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceMissingIndexListResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The average cost savings.
     *
     * @example 4.67
     *
     * @var float
     */
    public $avgTotalUserCost;

    /**
     * @description The performance improvement, in percentage.
     *
     * @example 98.3
     *
     * @var float
     */
    public $avgUserImpact;

    /**
     * @description The statement used to create the missing indexes.
     *
     * @example CREATE INDEX [IX_CLOUDDBA_school_dbo_stu@col1_@col2] ON [school].[dbo].[stu]([col1],[col2],[col3]) INCLUDE ([col4],[col5]) WITH (FILLFACTOR = 90, ONLINE = OFF);
     *
     * @var string
     */
    public $createIndex;

    /**
     * @description The database name.
     *
     * @example school
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The index columns included in the equal operation.
     *
     * @example col1,col2,col3
     *
     * @var string
     */
    public $equalityColumns;

    /**
     * @description The columns on which indexes are missing.
     *
     * @example col3,col4
     *
     * @var string
     */
    public $includedColumns;

    /**
     * @description The number of indexes.
     *
     * @example 1
     *
     * @var int
     */
    public $indexCount;

    /**
     * @description The index columns included in the not equal operation.
     *
     * @example 2392
     *
     * @var string
     */
    public $inequalityColumns;

    /**
     * @description The last seek time of a user.
     *
     * @example 1702023327000
     *
     * @var int
     */
    public $lastUserSeek;

    /**
     * @description The object name.
     *
     * @example stu
     *
     * @var string
     */
    public $objectName;

    /**
     * @description The total number of returned pages.
     *
     * @example 5025
     *
     * @var int
     */
    public $reservedPages;

    /**
     * @description The table size.
     *
     * @example 39.26
     *
     * @var float
     */
    public $reservedSize;

    /**
     * @description The number of table rows.
     *
     * @example 226945
     *
     * @var int
     */
    public $rowCount;

    /**
     * @description The schema name.
     *
     * @example dbo
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The number of scans.
     *
     * @example 0
     *
     * @var int
     */
    public $systemScans;

    /**
     * @description The number of seeks.
     *
     * @example 0
     *
     * @var int
     */
    public $systemSeeks;

    /**
     * @description The number of compilations.
     *
     * @example 2392
     *
     * @var int
     */
    public $uniqueCompiles;

    /**
     * @description The number of scans performed by users.
     *
     * @example 0
     *
     * @var int
     */
    public $userScans;

    /**
     * @description The number of seeks performed by users.
     *
     * @example 1081
     *
     * @var int
     */
    public $userSeeks;
    protected $_name = [
        'avgTotalUserCost'  => 'AvgTotalUserCost',
        'avgUserImpact'     => 'AvgUserImpact',
        'createIndex'       => 'CreateIndex',
        'databaseName'      => 'DatabaseName',
        'equalityColumns'   => 'EqualityColumns',
        'includedColumns'   => 'IncludedColumns',
        'indexCount'        => 'IndexCount',
        'inequalityColumns' => 'InequalityColumns',
        'lastUserSeek'      => 'LastUserSeek',
        'objectName'        => 'ObjectName',
        'reservedPages'     => 'ReservedPages',
        'reservedSize'      => 'ReservedSize',
        'rowCount'          => 'RowCount',
        'schemaName'        => 'SchemaName',
        'systemScans'       => 'SystemScans',
        'systemSeeks'       => 'SystemSeeks',
        'uniqueCompiles'    => 'UniqueCompiles',
        'userScans'         => 'UserScans',
        'userSeeks'         => 'UserSeeks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgTotalUserCost) {
            $res['AvgTotalUserCost'] = $this->avgTotalUserCost;
        }
        if (null !== $this->avgUserImpact) {
            $res['AvgUserImpact'] = $this->avgUserImpact;
        }
        if (null !== $this->createIndex) {
            $res['CreateIndex'] = $this->createIndex;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->equalityColumns) {
            $res['EqualityColumns'] = $this->equalityColumns;
        }
        if (null !== $this->includedColumns) {
            $res['IncludedColumns'] = $this->includedColumns;
        }
        if (null !== $this->indexCount) {
            $res['IndexCount'] = $this->indexCount;
        }
        if (null !== $this->inequalityColumns) {
            $res['InequalityColumns'] = $this->inequalityColumns;
        }
        if (null !== $this->lastUserSeek) {
            $res['LastUserSeek'] = $this->lastUserSeek;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->reservedPages) {
            $res['ReservedPages'] = $this->reservedPages;
        }
        if (null !== $this->reservedSize) {
            $res['ReservedSize'] = $this->reservedSize;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->systemScans) {
            $res['SystemScans'] = $this->systemScans;
        }
        if (null !== $this->systemSeeks) {
            $res['SystemSeeks'] = $this->systemSeeks;
        }
        if (null !== $this->uniqueCompiles) {
            $res['UniqueCompiles'] = $this->uniqueCompiles;
        }
        if (null !== $this->userScans) {
            $res['UserScans'] = $this->userScans;
        }
        if (null !== $this->userSeeks) {
            $res['UserSeeks'] = $this->userSeeks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgTotalUserCost'])) {
            $model->avgTotalUserCost = $map['AvgTotalUserCost'];
        }
        if (isset($map['AvgUserImpact'])) {
            $model->avgUserImpact = $map['AvgUserImpact'];
        }
        if (isset($map['CreateIndex'])) {
            $model->createIndex = $map['CreateIndex'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['EqualityColumns'])) {
            $model->equalityColumns = $map['EqualityColumns'];
        }
        if (isset($map['IncludedColumns'])) {
            $model->includedColumns = $map['IncludedColumns'];
        }
        if (isset($map['IndexCount'])) {
            $model->indexCount = $map['IndexCount'];
        }
        if (isset($map['InequalityColumns'])) {
            $model->inequalityColumns = $map['InequalityColumns'];
        }
        if (isset($map['LastUserSeek'])) {
            $model->lastUserSeek = $map['LastUserSeek'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['ReservedPages'])) {
            $model->reservedPages = $map['ReservedPages'];
        }
        if (isset($map['ReservedSize'])) {
            $model->reservedSize = $map['ReservedSize'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SystemScans'])) {
            $model->systemScans = $map['SystemScans'];
        }
        if (isset($map['SystemSeeks'])) {
            $model->systemSeeks = $map['SystemSeeks'];
        }
        if (isset($map['UniqueCompiles'])) {
            $model->uniqueCompiles = $map['UniqueCompiles'];
        }
        if (isset($map['UserScans'])) {
            $model->userScans = $map['UserScans'];
        }
        if (isset($map['UserSeeks'])) {
            $model->userSeeks = $map['UserSeeks'];
        }

        return $model;
    }
}
