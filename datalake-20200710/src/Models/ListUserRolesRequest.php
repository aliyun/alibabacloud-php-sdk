<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListUserRolesRequest extends Model
{
    /**
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
     * @example acs:ram::1111:user/userName
     *
     * @var string
     */
    public $principalArn;

    /**
     * @description role name pattern filter
     *
     * @example .*test.*
     *
     * @var string
     */
    public $roleNamePattern;
    protected $_name = [
        'nextPageToken'   => 'NextPageToken',
        'pageSize'        => 'PageSize',
        'principalArn'    => 'PrincipalArn',
        'roleNamePattern' => 'RoleNamePattern',
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
        if (null !== $this->principalArn) {
            $res['PrincipalArn'] = $this->principalArn;
        }
        if (null !== $this->roleNamePattern) {
            $res['RoleNamePattern'] = $this->roleNamePattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserRolesRequest
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
        if (isset($map['PrincipalArn'])) {
            $model->principalArn = $map['PrincipalArn'];
        }
        if (isset($map['RoleNamePattern'])) {
            $model->roleNamePattern = $map['RoleNamePattern'];
        }

        return $model;
    }
}
