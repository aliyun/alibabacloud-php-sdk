<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageProjectsInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class storageProjectInfoList extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var float
     */
    public $longTermStorage;

    /**
     * @var string
     */
    public $longTermStorageUnit;

    /**
     * @var float
     */
    public $lowFreqStorage;

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
     * @var float
     */
    public $recycleBinStorage;

    /**
     * @var string
     */
    public $recycleBinStorageUnit;

    /**
     * @var float
     */
    public $standardStorage;

    /**
     * @var string
     */
    public $standardStorageUnit;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float
     */
    public $totalStorage;

    /**
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
