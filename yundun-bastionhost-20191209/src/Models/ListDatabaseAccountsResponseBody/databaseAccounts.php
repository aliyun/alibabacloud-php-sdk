<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class databaseAccounts extends Model
{
    /**
     * @example 59
     *
     * @var string
     */
    public $databaseAccountId;

    /**
     * @example test
     *
     * @var string
     */
    public $databaseAccountName;

    /**
     * @example 4
     *
     * @var string
     */
    public $databaseId;

    /**
     * @example orcl
     *
     * @var string
     */
    public $databaseSchema;

    /**
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
