<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddDataServiceProjectMemberRequest\addCommand;

use AlibabaCloud\Tea\Model;

class projectMemberList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xx@aliyuncs.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $role;

    /**
     * @description This parameter is required.
     *
     * @example 30012011
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountName' => 'AccountName',
        'displayName' => 'DisplayName',
        'role' => 'Role',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectMemberList
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
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
