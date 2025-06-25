<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetDatabaseAccountResponseBody;

use AlibabaCloud\Dara\Model;

class databaseAccount extends Model
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
    public $databaseSchema;

    /**
     * @var bool
     */
    public $hasPassword;

    /**
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
