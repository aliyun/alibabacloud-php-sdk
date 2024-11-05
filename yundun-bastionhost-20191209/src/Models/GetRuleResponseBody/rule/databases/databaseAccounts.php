<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule\databases;

use AlibabaCloud\Tea\Model;

class databaseAccounts extends Model
{
    /**
     * @description The ID of the database account that the policy authorizes users to manage.
     *
     * @example 5
     *
     * @var string
     */
    public $databaseAccountId;
    protected $_name = [
        'databaseAccountId' => 'DatabaseAccountId',
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

        return $model;
    }
}
