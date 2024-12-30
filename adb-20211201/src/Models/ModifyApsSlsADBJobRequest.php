<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsSlsADBJobRequest\columns;
use AlibabaCloud\Tea\Model;

class ModifyApsSlsADBJobRequest extends Model
{
    /**
     * @example -
     *
     * @var columns[]
     */
    public $columns;

    /**
     * @description This parameter is required.
     *
     * @example amv-*******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example dbName
     *
     * @var string
     */
    public $dbName;

    /**
     * @example STOP
     *
     * @var string
     */
    public $dirtyDataProcessPattern;

    /**
     * @example true
     *
     * @var string
     */
    public $exactlyOnce;

    /**
     * @example test_123
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example end_cursor
     *
     * @var string
     */
    public $startingOffsets;

    /**
     * @example test
     *
     * @var string
     */
    public $tableName;

    /**
     * @example -
     *
     * @var string
     */
    public $unixTimestampConvert;

    /**
     * @example user-name
     *
     * @var string
     */
    public $userName;

    /**
     * @description This parameter is required.
     *
     * @example aps-******
     *
     * @var string
     */
    public $workloadId;

    /**
     * @example test-name
     *
     * @var string
     */
    public $workloadName;
    protected $_name = [
        'columns'                 => 'Columns',
        'DBClusterId'             => 'DBClusterId',
        'dbName'                  => 'DbName',
        'dirtyDataProcessPattern' => 'DirtyDataProcessPattern',
        'exactlyOnce'             => 'ExactlyOnce',
        'password'                => 'Password',
        'regionId'                => 'RegionId',
        'startingOffsets'         => 'StartingOffsets',
        'tableName'               => 'TableName',
        'unixTimestampConvert'    => 'UnixTimestampConvert',
        'userName'                => 'UserName',
        'workloadId'              => 'WorkloadId',
        'workloadName'            => 'WorkloadName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return ModifyApsSlsADBJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
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
