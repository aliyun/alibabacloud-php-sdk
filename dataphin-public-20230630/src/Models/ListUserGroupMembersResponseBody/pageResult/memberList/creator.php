<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupMembersResponseBody\pageResult\memberList;

use AlibabaCloud\Tea\Model;

class creator extends Model
{
    /**
     * @example 12121111
     *
     * @var string
     */
    public $accountName;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 12121111
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'accountName' => 'AccountName',
        'displayName' => 'DisplayName',
        'id'          => 'Id',
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
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return creator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
