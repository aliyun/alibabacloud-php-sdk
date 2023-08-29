<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListRoleUsersRequest extends Model
{
    /**
     * @description NextPageToken
     *
     * @example token!
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description PageSize
     *
     * @example -1/100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example admin
     *
     * @var string
     */
    public $roleName;

    /**
     * @description use name pattern filter
     *
     * @example .*user.*
     *
     * @var string
     */
    public $userNamePattern;
    protected $_name = [
        'nextPageToken'   => 'NextPageToken',
        'pageSize'        => 'PageSize',
        'roleName'        => 'RoleName',
        'userNamePattern' => 'UserNamePattern',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->userNamePattern) {
            $res['UserNamePattern'] = $this->userNamePattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRoleUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['UserNamePattern'])) {
            $model->userNamePattern = $map['UserNamePattern'];
        }

        return $model;
    }
}
