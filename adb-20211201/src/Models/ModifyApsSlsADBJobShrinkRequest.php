<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyApsSlsADBJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $columnsShrink;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dirtyDataProcessPattern;

    /**
     * @var string
     */
    public $exactlyOnce;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startingOffsets;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $unixTimestampConvert;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $workloadId;

    /**
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'columnsShrink' => 'Columns',
        'DBClusterId' => 'DBClusterId',
        'dbName' => 'DbName',
        'dirtyDataProcessPattern' => 'DirtyDataProcessPattern',
        'exactlyOnce' => 'ExactlyOnce',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'startingOffsets' => 'StartingOffsets',
        'tableName' => 'TableName',
        'unixTimestampConvert' => 'UnixTimestampConvert',
        'userName' => 'UserName',
        'workloadId' => 'WorkloadId',
        'workloadName' => 'WorkloadName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnsShrink) {
            $res['Columns'] = $this->columnsShrink;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dirtyDataProcessPattern) {
            $res['DirtyDataProcessPattern'] = $this->dirtyDataProcessPattern;
        }

        if (null !== $this->exactlyOnce) {
            $res['ExactlyOnce'] = $this->exactlyOnce;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startingOffsets) {
            $res['StartingOffsets'] = $this->startingOffsets;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->unixTimestampConvert) {
            $res['UnixTimestampConvert'] = $this->unixTimestampConvert;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }

        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
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
        if (isset($map['Columns'])) {
            $model->columnsShrink = $map['Columns'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DirtyDataProcessPattern'])) {
            $model->dirtyDataProcessPattern = $map['DirtyDataProcessPattern'];
        }

        if (isset($map['ExactlyOnce'])) {
            $model->exactlyOnce = $map['ExactlyOnce'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartingOffsets'])) {
            $model->startingOffsets = $map['StartingOffsets'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['UnixTimestampConvert'])) {
            $model->unixTimestampConvert = $map['UnixTimestampConvert'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }

        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        return $model;
    }
}
