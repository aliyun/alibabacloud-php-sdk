<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyUserDetailRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Specifies whether the fuzzy search by account name is supported. If you want to use fuzzy search, set the parameter to **1**. If you set the parameter to a different value or leave the parameter empty, fuzzy search is not supported.
     *
     * @example 1
     *
     * @var string
     */
    public $extend;

    /**
     * @description Specifies whether the account has root permissions. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var string
     */
    public $isRoot;

    /**
     * @description The timestamp of the last logoff from the account. Unit: milliseconds.
     *
     * @example 164922523600
     *
     * @var int
     */
    public $lastLoginTimeEnd;

    /**
     * @description The timestamp of the last logon to the account. Unit: milliseconds.
     *
     * @example 164922523600
     *
     * @var int
     */
    public $lastLoginTimeStart;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name or IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The name of the account to which the server belongs.
     *
     * @example bin
     *
     * @var string
     */
    public $user;

    /**
     * @description The UUID of the server.
     *
     * @example 50d213b4-3a35-427a-b8a5-04b0c7e1****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage'        => 'CurrentPage',
        'extend'             => 'Extend',
        'isRoot'             => 'IsRoot',
        'lastLoginTimeEnd'   => 'LastLoginTimeEnd',
        'lastLoginTimeStart' => 'LastLoginTimeStart',
        'pageSize'           => 'PageSize',
        'remark'             => 'Remark',
        'user'               => 'User',
        'uuid'               => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->isRoot) {
            $res['IsRoot'] = $this->isRoot;
        }
        if (null !== $this->lastLoginTimeEnd) {
            $res['LastLoginTimeEnd'] = $this->lastLoginTimeEnd;
        }
        if (null !== $this->lastLoginTimeStart) {
            $res['LastLoginTimeStart'] = $this->lastLoginTimeStart;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyUserDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['IsRoot'])) {
            $model->isRoot = $map['IsRoot'];
        }
        if (isset($map['LastLoginTimeEnd'])) {
            $model->lastLoginTimeEnd = $map['LastLoginTimeEnd'];
        }
        if (isset($map['LastLoginTimeStart'])) {
            $model->lastLoginTimeStart = $map['LastLoginTimeStart'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
