<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand\rules\userMappingList;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 300001111
     *
     * @var string
     */
    public $accountId;
    protected $_name = [
        'accountId' => 'AccountId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}
