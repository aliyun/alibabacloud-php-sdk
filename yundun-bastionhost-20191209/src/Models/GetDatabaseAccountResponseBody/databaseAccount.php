<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseAccountResponseBody;

use AlibabaCloud\Tea\Model;

class databaseAccount extends Model
{
    /**
     * @description The database account ID.
     *
     * @example 9
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @description The name of the database account.
     *
     * @example uac
     *
     * @var string
     */
    public $databaseAccountName;

    /**
     * @description The database name. A value is returned for this parameter if the database engine is PostgreSQL or Oracle.
     *
     * @example orcl
     *
     * @var string
     */
    public $databaseSchema;

    /**
     * @description Indicates whether the database account has a password.
     * Valid values:
     * true
     * false
     *
     * @example true
     *
     * @var bool
     */
    public $hasPassword;

    /**
     * @description The logon attribute. A value is returned for this parameter if the database engine is Oracle. Valid values:
     *
     *   SERVICENAME
     *   SID
     *
     * @example SID
     *
     * @var string
     */
    public $loginAttribute;
    protected $_name = [
        'databaseAccountId' => 'DatabaseAccountId',
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseSchema' => 'DatabaseSchema',
        'hasPassword' => 'HasPassword',
        'loginAttribute' => 'LoginAttribute',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseAccountId) {
            $res['DatabaseAccountId'] = $this->databaseAccountId;
        }
        if (null !== $this->databaseAccountName) {
            $res['DatabaseAccountName'] = $this->databaseAccountName;
        }
        if (null !== $this->databaseSchema) {
            $res['DatabaseSchema'] = $this->databaseSchema;
        }
        if (null !== $this->hasPassword) {
            $res['HasPassword'] = $this->hasPassword;
        }
        if (null !== $this->loginAttribute) {
            $res['LoginAttribute'] = $this->loginAttribute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseAccountId'])) {
            $model->databaseAccountId = $map['DatabaseAccountId'];
        }
        if (isset($map['DatabaseAccountName'])) {
            $model->databaseAccountName = $map['DatabaseAccountName'];
        }
        if (isset($map['DatabaseSchema'])) {
            $model->databaseSchema = $map['DatabaseSchema'];
        }
        if (isset($map['HasPassword'])) {
            $model->hasPassword = $map['HasPassword'];
        }
        if (isset($map['LoginAttribute'])) {
            $model->loginAttribute = $map['LoginAttribute'];
        }

        return $model;
    }
}
