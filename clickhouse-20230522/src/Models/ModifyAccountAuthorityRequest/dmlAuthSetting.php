<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityRequest;

use AlibabaCloud\Tea\Model;

class dmlAuthSetting extends Model
{
    /**
     * @description The databases on which you want to grant permissions. Separate multiple databases with commas (,).
     *
     * @var string[]
     */
    public $allowDatabases;

    /**
     * @description The dictionaries on which you want to grant permissions. Separate multiple dictionaries with commas (,).
     *
     * @var string[]
     */
    public $allowDictionaries;

    /**
     * @description Specifies whether to grant the DDL permissions to the database account. Valid values:
     *
     *   **true**: The account has the permissions to execute DDL statements.
     *   **false**: The account does not have the permissions to execute DDL statements.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $ddlAuthority;

    /**
     * @description Specifies whether to grant the DML permissions to the database account. Valid values:
     *
     *   **0**: The account has the permissions to read data from the database, write data to the database, and modify the settings of the database.
     *   **1**: The account only has the permissions to read data from the database.
     *   **2**: The account only has the permissions to read data from the database and modify the settings of the database.
     *
     * This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $dmlAuthority;
    protected $_name = [
        'allowDatabases' => 'AllowDatabases',
        'allowDictionaries' => 'AllowDictionaries',
        'ddlAuthority' => 'DdlAuthority',
        'dmlAuthority' => 'DmlAuthority',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowDatabases) {
            $res['AllowDatabases'] = $this->allowDatabases;
        }
        if (null !== $this->allowDictionaries) {
            $res['AllowDictionaries'] = $this->allowDictionaries;
        }
        if (null !== $this->ddlAuthority) {
            $res['DdlAuthority'] = $this->ddlAuthority;
        }
        if (null !== $this->dmlAuthority) {
            $res['DmlAuthority'] = $this->dmlAuthority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dmlAuthSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['DdlAuthority'])) {
            $model->ddlAuthority = $map['DdlAuthority'];
        }
        if (isset($map['DmlAuthority'])) {
            $model->dmlAuthority = $map['DmlAuthority'];
        }

        return $model;
    }
}
