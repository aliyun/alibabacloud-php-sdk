<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniRecoverableListResponseBody;

use AlibabaCloud\Tea\Model;

class recoverableInfoList extends Model
{
    /**
     * @description The timestamp of the first backup. Unit: milliseconds.
     *
     * @example 1671468180000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description The timestamp of the last backup. Unit: milliseconds.
     *
     * @example 1671468180000
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The identifier of the point in time for restoration in the backup version that is used. The database is an Oracle database.
     *
     * @example 4529940.0
     *
     * @var string
     */
    public $resetScn;

    /**
     * @description The point in time for restoration in the backup version that is used. The database is an Oracle database.
     *
     * @example 2021-01-30 08:04:36
     *
     * @var int
     */
    public $resetTime;

    /**
     * @description The information about the database. This parameter is available when the database is a Microsoft SQL Server (MSSQL) database. The value is a JSON string. Valid values:
     *
     *   **name**: the name of the database
     *   **files**: the path to the database files
     *
     * @example {
     * }
     * @var string
     */
    public $restoreInfo;
    protected $_name = [
        'firstTime'   => 'FirstTime',
        'lastTime'    => 'LastTime',
        'resetScn'    => 'ResetScn',
        'resetTime'   => 'ResetTime',
        'restoreInfo' => 'RestoreInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoverableInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
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

        return $model;
    }
}
