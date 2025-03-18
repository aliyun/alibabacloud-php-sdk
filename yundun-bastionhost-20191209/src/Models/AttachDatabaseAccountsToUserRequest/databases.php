<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserRequest;

use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @description An array that consists of database account IDs.
     *
     * @var string[]
     */
    public $databaseAccountIds;

    /**
     * @description The ID of the database that you want to authorize the user to manage.
     *
     * @example 22
     *
     * @var string
     */
    public $databaseId;
    protected $_name = [
        'databaseAccountIds' => 'DatabaseAccountIds',
        'databaseId' => 'DatabaseId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
