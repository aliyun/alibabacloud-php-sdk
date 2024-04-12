<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAssetScopeRequest;

use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @example AccountId
     *
     * @var string
     */
    public $accountScopeType;

    /**
     * @var string[]
     */
    public $databaseAccountIds;

    /**
     * @example 3
     *
     * @var string
     */
    public $databaseId;
    protected $_name = [
        'accountScopeType'   => 'AccountScopeType',
        'databaseAccountIds' => 'DatabaseAccountIds',
        'databaseId'         => 'DatabaseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountScopeType) {
            $res['AccountScopeType'] = $this->accountScopeType;
        }
        if (null !== $this->databaseAccountIds) {
            $res['DatabaseAccountIds'] = $this->databaseAccountIds;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountScopeType'])) {
            $model->accountScopeType = $map['AccountScopeType'];
        }
        if (isset($map['DatabaseAccountIds'])) {
            if (!empty($map['DatabaseAccountIds'])) {
                $model->databaseAccountIds = $map['DatabaseAccountIds'];
            }
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }

        return $model;
    }
}
