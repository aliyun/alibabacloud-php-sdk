<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountAuthorityResponseBody extends Model
{
    /**
     * @description The name of the database account.
     *
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Databases to which permissions have been granted.
     *
     * @var string[]
     */
    public $allowDatabases;

    /**
     * @description Dictionaries to which permissions have been granted.
     *
     * @var string[]
     */
    public $allowDictionaries;

    /**
     * @description Indicates whether the database account has DDL permissions. Valid values:
     *
     *   **true**: has DDL permissions.
     *   **false**: does not have DDL permissions.
     *
     * @example true
     *
     * @var bool
     */
    public $ddlAuthority;

    /**
     * @description Indicates whether the database account has DML permissions. Valid values:
     *
     *   **all**
     *   **readOnly,modify**
     *
     * @example all
     *
     * @var string
     */
    public $dmlAuthority;

    /**
     * @description The request ID.
     *
     * @example F5178C10-1407-4987-9133-DE4DC9119F75
     *
     * @var string
     */
    public $requestId;

    /**
     * @description All databases.
     *
     * @var string[]
     */
    public $totalDatabases;

    /**
     * @description All dictionaries.
     *
     * @var string[]
     */
    public $totalDictionaries;
    protected $_name = [
        'accountName'       => 'AccountName',
        'allowDatabases'    => 'AllowDatabases',
        'allowDictionaries' => 'AllowDictionaries',
        'ddlAuthority'      => 'DdlAuthority',
        'dmlAuthority'      => 'DmlAuthority',
        'requestId'         => 'RequestId',
        'totalDatabases'    => 'TotalDatabases',
        'totalDictionaries' => 'TotalDictionaries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeAccountAuthorityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
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
        if (isset($map['DdlAuthority'])) {
            $model->ddlAuthority = $map['DdlAuthority'];
        }
        if (isset($map['DmlAuthority'])) {
            $model->dmlAuthority = $map['DmlAuthority'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
