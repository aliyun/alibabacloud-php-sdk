<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListMembersRequest extends Model
{
    /**
     * @example zhangsan
     *
     * @var string
     */
    public $memberName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example PAI.AlgoDeveloper
     *
     * @var string
     */
    public $roles;
    protected $_name = [
        'memberName' => 'MemberName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'roles'      => 'Roles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }

        return $model;
    }
}
