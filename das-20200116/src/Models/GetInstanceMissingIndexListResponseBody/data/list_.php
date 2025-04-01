<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceMissingIndexListResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var float
     */
    public $avgTotalUserCost;

    /**
     * @var float
     */
    public $avgUserImpact;

    /**
     * @var string
     */
    public $createIndex;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $equalityColumns;

    /**
     * @var string
     */
    public $includedColumns;

    /**
     * @var int
     */
    public $indexCount;

    /**
     * @var string
     */
    public $inequalityColumns;

    /**
     * @var int
     */
    public $lastUserSeek;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var int
     */
    public $reservedPages;

    /**
     * @var float
     */
    public $reservedSize;

    /**
     * @var int
     */
    public $rowCount;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var int
     */
    public $systemScans;

    /**
     * @var int
     */
    public $systemSeeks;

    /**
     * @var int
     */
    public $uniqueCompiles;

    /**
     * @var int
     */
    public $userScans;

    /**
     * @var int
     */
    public $userSeeks;
    protected $_name = [
        'avgTotalUserCost' => 'AvgTotalUserCost',
        'avgUserImpact' => 'AvgUserImpact',
        'createIndex' => 'CreateIndex',
        'databaseName' => 'DatabaseName',
        'equalityColumns' => 'EqualityColumns',
        'includedColumns' => 'IncludedColumns',
        'indexCount' => 'IndexCount',
        'inequalityColumns' => 'InequalityColumns',
        'lastUserSeek' => 'LastUserSeek',
        'objectName' => 'ObjectName',
        'reservedPages' => 'ReservedPages',
        'reservedSize' => 'ReservedSize',
        'rowCount' => 'RowCount',
        'schemaName' => 'SchemaName',
        'systemScans' => 'SystemScans',
        'systemSeeks' => 'SystemSeeks',
        'uniqueCompiles' => 'UniqueCompiles',
        'userScans' => 'UserScans',
        'userSeeks' => 'UserSeeks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
