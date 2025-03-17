<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeAccountAuthorityResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the database account.
     *
     * @example test1
     *
     * @var string
     */
    public $account;

    /**
     * @description The databases on which permissions are granted.
     *
     * @var string[]
     */
    public $allowDatabases;

    /**
     * @description The dictionaries on which permissions are granted.
     *
     * @var string[]
     */
    public $allowDictionaries;

    /**
     * @description The cluster ID.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Indicates whether the DDL permissions are granted to the database account. Valid values:
     *
     *   **true**: The account has the permissions to execute DDL statements.
     *   **false**: The account does not have the permissions to execute DDL statements.
     *
     * @example true
     *
     * @var bool
     */
    public $ddlAuthority;

    /**
     * @description Indicates whether the DML permissions are granted to the database account. Valid values:
     *
     *   0: The account has the permissions to read data from the database, write data to the database, and modify the settings of the database.
     *   1: The account only has the permissions to read data from the database.
     *   2: The account only has the permissions to read data from the database and modify the settings of the database.
     *
     * @example 0
     *
     * @var int
     */
    public $dmlAuthority;

    /**
     * @description All databases.
     *
     * @var string[]
     */
    public $totalDatabases;

    /**
     * @description The database.
     *
     * @var string[]
     */
    public $totalDictionaries;
    protected $_name = [
        'account' => 'Account',
        'allowDatabases' => 'AllowDatabases',
        'allowDictionaries' => 'AllowDictionaries',
        'DBInstanceId' => 'DBInstanceId',
        'ddlAuthority' => 'DdlAuthority',
        'dmlAuthority' => 'DmlAuthority',
        'totalDatabases' => 'TotalDatabases',
        'totalDictionaries' => 'TotalDictionaries',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->allowDatabases) {
            $res['AllowDatabases'] = $this->allowDatabases;
        }
        if (null !== $this->allowDictionaries) {
            $res['AllowDictionaries'] = $this->allowDictionaries;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ddlAuthority) {
            $res['DdlAuthority'] = $this->ddlAuthority;
        }
        if (null !== $this->dmlAuthority) {
            $res['DmlAuthority'] = $this->dmlAuthority;
        }
        if (null !== $this->totalDatabases) {
            $res['TotalDatabases'] = $this->totalDatabases;
        }
        if (null !== $this->totalDictionaries) {
            $res['TotalDictionaries'] = $this->totalDictionaries;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AllowDatabases'])) {
            if (!empty($map['AllowDatabases'])) {
                $model->allowDatabases = $map['AllowDatabases'];
            }
        }
        if (isset($map['AllowDictionaries'])) {
            if (!empty($map['AllowDictionaries'])) {
                $model->allowDictionaries = $map['AllowDictionaries'];
            }
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DdlAuthority'])) {
            $model->ddlAuthority = $map['DdlAuthority'];
        }
        if (isset($map['DmlAuthority'])) {
            $model->dmlAuthority = $map['DmlAuthority'];
        }
        if (isset($map['TotalDatabases'])) {
            if (!empty($map['TotalDatabases'])) {
                $model->totalDatabases = $map['TotalDatabases'];
            }
        }
        if (isset($map['TotalDictionaries'])) {
            if (!empty($map['TotalDictionaries'])) {
                $model->totalDictionaries = $map['TotalDictionaries'];
            }
        }

        return $model;
    }
}
