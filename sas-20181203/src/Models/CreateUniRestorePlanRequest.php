<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateUniRestorePlanRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example qtc
     *
     * @var string
     */
    public $database;

    /**
     * @description The UUID of the Hybrid Backup Recovery (HBR) agent that is used to restore the data of the database on your server.
     *
     * >  You can call the [DescribeUniBackupDatabase](~~DescribeUniBackupDatabase~~) operation to query the UUID.
     * @example ac457b30598d11ed800000163e02****
     *
     * @var string
     */
    public $instanceUuid;

    /**
     * @description The ID of the anti-ransomware policy.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The identifier of the point in time for restoration in the backup version that you want to use. The database is an Oracle database.****
     *
     * >  You can call the [DescribeUniRecoverableList](~~DescribeUniRecoverableList~~) operation to query the value.
     * @example 925702.0
     *
     * @var string
     */
    public $resetScn;

    /**
     * @description The point in time for restoration in the backup version that you want to use. The database is an Oracle database.****
     *
     * >  You can call the [DescribeUniRecoverableList](~~DescribeUniRecoverableList~~) operation to query the value.
     * @example 2022-10-29 01:06:24
     *
     * @var string
     */
    public $resetTime;

    /**
     * @description The information about the database. This parameter is available when the database is a Microsoft SQL Server (MSSQL) database. The value is a JSON string. Valid values:
     *
     *   **name**: the name of the database
     *   **files**: the path to the database files
     *
     * >  You can call the [DescribeUniRecoverableList](~~DescribeUniRecoverableList~~) operation to query the information.
     * @example {"files": {"qtc":"F:\\\\database\\\\qtc.mdf","qtc_log":"F:\\\\database\\\\qtc_0.ldf"},
     * "name":"qtc"}
     * @var string
     */
    public $restoreInfo;

    /**
     * @description The point in time to which you want to restore data.
     *
     * This parameter is required.
     * @example 1656957664000
     *
     * @var int
     */
    public $timePoint;
    protected $_name = [
        'database'     => 'Database',
        'instanceUuid' => 'InstanceUuid',
        'policyId'     => 'PolicyId',
        'resetScn'     => 'ResetScn',
        'resetTime'    => 'ResetTime',
        'restoreInfo'  => 'RestoreInfo',
        'timePoint'    => 'TimePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->resetScn) {
            $res['ResetScn'] = $this->resetScn;
        }
        if (null !== $this->resetTime) {
            $res['ResetTime'] = $this->resetTime;
        }
        if (null !== $this->restoreInfo) {
            $res['RestoreInfo'] = $this->restoreInfo;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUniRestorePlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['ResetScn'])) {
            $model->resetScn = $map['ResetScn'];
        }
        if (isset($map['ResetTime'])) {
            $model->resetTime = $map['ResetTime'];
        }
        if (isset($map['RestoreInfo'])) {
            $model->restoreInfo = $map['RestoreInfo'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
