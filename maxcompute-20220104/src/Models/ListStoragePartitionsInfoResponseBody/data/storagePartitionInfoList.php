<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class storagePartitionInfoList extends Model
{
    /**
     * @var int
     */
    public $fileCount;
    /**
     * @var float
     */
    public $fileSize;
    /**
     * @var string
     */
    public $fileSizeUnit;
    /**
     * @var bool
     */
    public $isPartitioned;
    /**
     * @var int
     */
    public $lastAccessTime;
    /**
     * @var string
     */
    public $partition;
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
     * @var string
     */
    public $type;
    protected $_name = [
        'fileCount'            => 'fileCount',
        'fileSize'             => 'fileSize',
        'fileSizeUnit'         => 'fileSizeUnit',
        'isPartitioned'        => 'isPartitioned',
        'lastAccessTime'       => 'lastAccessTime',
        'partition'            => 'partition',
        'projectName'          => 'projectName',
        'rate'                 => 'rate',
        'schemaName'           => 'schemaName',
        'storageType'          => 'storageType',
        'tableName'            => 'tableName',
        'totalFrequency'       => 'totalFrequency',
        'totalInputAmount'     => 'totalInputAmount',
        'totalInputAmountUnit' => 'totalInputAmountUnit',
        'type'                 => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileCount) {
            $res['fileCount'] = $this->fileCount;
        }

        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->fileSizeUnit) {
            $res['fileSizeUnit'] = $this->fileSizeUnit;
        }

        if (null !== $this->isPartitioned) {
            $res['isPartitioned'] = $this->isPartitioned;
        }

        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['fileCount'])) {
            $model->fileCount = $map['fileCount'];
        }

        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['fileSizeUnit'])) {
            $model->fileSizeUnit = $map['fileSizeUnit'];
        }

        if (isset($map['isPartitioned'])) {
            $model->isPartitioned = $map['isPartitioned'];
        }

        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
