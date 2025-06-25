<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListDatabaseAccountsResponseBody;

use AlibabaCloud\Dara\Model;

class databaseAccounts extends Model
{
    /**
     * @var string
     */
    public $databaseAccountId;

    /**
     * @var string
     */
    public $databaseAccountName;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $databaseSchema;

    /**
     * @var string
     */
    public $hasPassword;
    protected $_name = [
        'databaseAccountId' => 'DatabaseAccountId',
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseId' => 'DatabaseId',
        'databaseSchema' => 'DatabaseSchema',
        'hasPassword' => 'HasPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
