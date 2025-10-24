<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class storageTableInfoList extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var bool
     */
    public $isPartitioned;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var float
     */
    public $longTermStorage;

    /**
     * @var int
     */
    public $longTermStorageFileCount;

    /**
     * @var string
     */
    public $longTermStorageUnit;

    /**
     * @var float
     */
    public $lowFreqStorage;

    /**
     * @var int
     */
    public $lowFreqStorageFileCount;

    /**
     * @var string
     */
    public $lowFreqStorageUnit;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var float
     */
    public $standardStorage;

    /**
     * @var int
     */
    public $standardStorageFileCount;

    /**
     * @var string
     */
    public $standardStorageUnit;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $totalFrequency;

    /**
     * @var float
     */
    public $totalInputAmount;

    /**
     * @var string
     */
    public $totalInputAmountUnit;

    /**
     * @var float
     */
    public $totalStorage;

    /**
     * @var int
     */
    public $totalStorageFileCount;

    /**
     * @var string
     */
    public $totalStorageUnit;
    protected $_name = [
        'date' => 'date',
        'isPartitioned' => 'isPartitioned',
        'lastAccessTime' => 'lastAccessTime',
        'longTermStorage' => 'longTermStorage',
        'longTermStorageFileCount' => 'longTermStorageFileCount',
        'longTermStorageUnit' => 'longTermStorageUnit',
        'lowFreqStorage' => 'lowFreqStorage',
        'lowFreqStorageFileCount' => 'lowFreqStorageFileCount',
        'lowFreqStorageUnit' => 'lowFreqStorageUnit',
        'projectName' => 'projectName',
        'rate' => 'rate',
        'schemaName' => 'schemaName',
        'standardStorage' => 'standardStorage',
        'standardStorageFileCount' => 'standardStorageFileCount',
        'standardStorageUnit' => 'standardStorageUnit',
        'storageType' => 'storageType',
        'tableName' => 'tableName',
        'totalFrequency' => 'totalFrequency',
        'totalInputAmount' => 'totalInputAmount',
        'totalInputAmountUnit' => 'totalInputAmountUnit',
        'totalStorage' => 'totalStorage',
        'totalStorageFileCount' => 'totalStorageFileCount',
        'totalStorageUnit' => 'totalStorageUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->isPartitioned) {
            $res['isPartitioned'] = $this->isPartitioned;
        }

        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }

        if (null !== $this->longTermStorage) {
            $res['longTermStorage'] = $this->longTermStorage;
        }

        if (null !== $this->longTermStorageFileCount) {
            $res['longTermStorageFileCount'] = $this->longTermStorageFileCount;
        }

        if (null !== $this->longTermStorageUnit) {
            $res['longTermStorageUnit'] = $this->longTermStorageUnit;
        }

        if (null !== $this->lowFreqStorage) {
            $res['lowFreqStorage'] = $this->lowFreqStorage;
        }

        if (null !== $this->lowFreqStorageFileCount) {
            $res['lowFreqStorageFileCount'] = $this->lowFreqStorageFileCount;
        }

        if (null !== $this->lowFreqStorageUnit) {
            $res['lowFreqStorageUnit'] = $this->lowFreqStorageUnit;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
        }

        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
        }

        if (null !== $this->standardStorage) {
            $res['standardStorage'] = $this->standardStorage;
        }

        if (null !== $this->standardStorageFileCount) {
            $res['standardStorageFileCount'] = $this->standardStorageFileCount;
        }

        if (null !== $this->standardStorageUnit) {
            $res['standardStorageUnit'] = $this->standardStorageUnit;
        }

        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->totalFrequency) {
            $res['totalFrequency'] = $this->totalFrequency;
        }

        if (null !== $this->totalInputAmount) {
            $res['totalInputAmount'] = $this->totalInputAmount;
        }

        if (null !== $this->totalInputAmountUnit) {
            $res['totalInputAmountUnit'] = $this->totalInputAmountUnit;
        }

        if (null !== $this->totalStorage) {
            $res['totalStorage'] = $this->totalStorage;
        }

        if (null !== $this->totalStorageFileCount) {
            $res['totalStorageFileCount'] = $this->totalStorageFileCount;
        }

        if (null !== $this->totalStorageUnit) {
            $res['totalStorageUnit'] = $this->totalStorageUnit;
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
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['isPartitioned'])) {
            $model->isPartitioned = $map['isPartitioned'];
        }

        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }

        if (isset($map['longTermStorage'])) {
            $model->longTermStorage = $map['longTermStorage'];
        }

        if (isset($map['longTermStorageFileCount'])) {
            $model->longTermStorageFileCount = $map['longTermStorageFileCount'];
        }

        if (isset($map['longTermStorageUnit'])) {
            $model->longTermStorageUnit = $map['longTermStorageUnit'];
        }

        if (isset($map['lowFreqStorage'])) {
            $model->lowFreqStorage = $map['lowFreqStorage'];
        }

        if (isset($map['lowFreqStorageFileCount'])) {
            $model->lowFreqStorageFileCount = $map['lowFreqStorageFileCount'];
        }

        if (isset($map['lowFreqStorageUnit'])) {
            $model->lowFreqStorageUnit = $map['lowFreqStorageUnit'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }

        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }

        if (isset($map['standardStorage'])) {
            $model->standardStorage = $map['standardStorage'];
        }

        if (isset($map['standardStorageFileCount'])) {
            $model->standardStorageFileCount = $map['standardStorageFileCount'];
        }

        if (isset($map['standardStorageUnit'])) {
            $model->standardStorageUnit = $map['standardStorageUnit'];
        }

        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['totalFrequency'])) {
            $model->totalFrequency = $map['totalFrequency'];
        }

        if (isset($map['totalInputAmount'])) {
            $model->totalInputAmount = $map['totalInputAmount'];
        }

        if (isset($map['totalInputAmountUnit'])) {
            $model->totalInputAmountUnit = $map['totalInputAmountUnit'];
        }

        if (isset($map['totalStorage'])) {
            $model->totalStorage = $map['totalStorage'];
        }

        if (isset($map['totalStorageFileCount'])) {
            $model->totalStorageFileCount = $map['totalStorageFileCount'];
        }

        if (isset($map['totalStorageUnit'])) {
            $model->totalStorageUnit = $map['totalStorageUnit'];
        }

        return $model;
    }
}
