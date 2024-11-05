<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class databaseAccounts extends Model
{
    /**
     * @description The database account ID.
     *
     * @example 59
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @description The name of the database account.
     *
     * @example test
     *
     * @var string
     */
    public $databaseAccountName;

    /**
     * @description The database ID.
     *
     * @example 4
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The name of the database. A value is returned for this parameter if the engine of the database with the specified database ID is PostgreSQL or Oracle.
     *
     * @example orcl
     *
     * @var string
     */
    public $databaseSchema;

    /**
     * @description Indicates whether the database account has a password. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $hasPassword;
    protected $_name = [
        'databaseAccountId'   => 'DatabaseAccountId',
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseId'          => 'DatabaseId',
        'databaseSchema'      => 'DatabaseSchema',
        'hasPassword'         => 'HasPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseAccountId) {
            $res['DatabaseAccountId'] = $this->databaseAccountId;
        }
        if (null !== $this->databaseAccountName) {
            $res['DatabaseAccountName'] = $this->databaseAccountName;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->databaseSchema) {
            $res['DatabaseSchema'] = $this->databaseSchema;
        }
        if (null !== $this->hasPassword) {
            $res['HasPassword'] = $this->hasPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseAccounts
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
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DatabaseSchema'])) {
            $model->databaseSchema = $map['DatabaseSchema'];
        }
        if (isset($map['HasPassword'])) {
            $model->hasPassword = $map['HasPassword'];
        }

        return $model;
    }
}
