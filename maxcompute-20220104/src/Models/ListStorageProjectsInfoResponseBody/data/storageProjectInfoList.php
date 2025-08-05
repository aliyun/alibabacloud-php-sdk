<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageProjectsInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class storageProjectInfoList extends Model
{
    /**
     * @example 20250528
     *
     * @var string
     */
    public $date;

    /**
     * @example 300
     *
     * @var float
     */
    public $longTermStorage;

    /**
     * @example GB
     *
     * @var string
     */
    public $longTermStorageUnit;

    /**
     * @example 200
     *
     * @var float
     */
    public $lowFreqStorage;

    /**
     * @example GB
     *
     * @var string
     */
    public $lowFreqStorageUnit;

    /**
     * @example max_testproject
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 0.011872406445069006
     *
     * @var float
     */
    public $rate;

    /**
     * @example 0
     *
     * @var float
     */
    public $recycleBinStorage;

    /**
     * @example B
     *
     * @var string
     */
    public $recycleBinStorageUnit;

    /**
     * @example 500
     *
     * @var float
     */
    public $standardStorage;

    /**
     * @example GB
     *
     * @var string
     */
    public $standardStorageUnit;

    /**
     * @example 1749105045512
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example 1
     *
     * @var float
     */
    public $totalStorage;

    /**
     * @example TB
     *
     * @var string
     */
    public $totalStorageUnit;
    protected $_name = [
        'date' => 'date',
        'longTermStorage' => 'longTermStorage',
        'longTermStorageUnit' => 'longTermStorageUnit',
        'lowFreqStorage' => 'lowFreqStorage',
        'lowFreqStorageUnit' => 'lowFreqStorageUnit',
        'projectName' => 'projectName',
        'rate' => 'rate',
        'recycleBinStorage' => 'recycleBinStorage',
        'recycleBinStorageUnit' => 'recycleBinStorageUnit',
        'standardStorage' => 'standardStorage',
        'standardStorageUnit' => 'standardStorageUnit',
        'timestamp' => 'timestamp',
        'totalStorage' => 'totalStorage',
        'totalStorageUnit' => 'totalStorageUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->longTermStorage) {
            $res['longTermStorage'] = $this->longTermStorage;
        }
        if (null !== $this->longTermStorageUnit) {
            $res['longTermStorageUnit'] = $this->longTermStorageUnit;
        }
        if (null !== $this->lowFreqStorage) {
            $res['lowFreqStorage'] = $this->lowFreqStorage;
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
        if (null !== $this->recycleBinStorage) {
            $res['recycleBinStorage'] = $this->recycleBinStorage;
        }
        if (null !== $this->recycleBinStorageUnit) {
            $res['recycleBinStorageUnit'] = $this->recycleBinStorageUnit;
        }
        if (null !== $this->standardStorage) {
            $res['standardStorage'] = $this->standardStorage;
        }
        if (null !== $this->standardStorageUnit) {
            $res['standardStorageUnit'] = $this->standardStorageUnit;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->totalStorage) {
            $res['totalStorage'] = $this->totalStorage;
        }
        if (null !== $this->totalStorageUnit) {
            $res['totalStorageUnit'] = $this->totalStorageUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageProjectInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['longTermStorage'])) {
            $model->longTermStorage = $map['longTermStorage'];
        }
        if (isset($map['longTermStorageUnit'])) {
            $model->longTermStorageUnit = $map['longTermStorageUnit'];
        }
        if (isset($map['lowFreqStorage'])) {
            $model->lowFreqStorage = $map['lowFreqStorage'];
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
        if (isset($map['recycleBinStorage'])) {
            $model->recycleBinStorage = $map['recycleBinStorage'];
        }
        if (isset($map['recycleBinStorageUnit'])) {
            $model->recycleBinStorageUnit = $map['recycleBinStorageUnit'];
        }
        if (isset($map['standardStorage'])) {
            $model->standardStorage = $map['standardStorage'];
        }
        if (isset($map['standardStorageUnit'])) {
            $model->standardStorageUnit = $map['standardStorageUnit'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['totalStorage'])) {
            $model->totalStorage = $map['totalStorage'];
        }
        if (isset($map['totalStorageUnit'])) {
            $model->totalStorageUnit = $map['totalStorageUnit'];
        }

        return $model;
    }
}
