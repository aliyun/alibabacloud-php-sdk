<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListUsersRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $searchKey;
    /**
     * @var int
     */
    public $tid;
    /**
     * @var string
     */
    public $userState;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'role'       => 'Role',
        'searchKey'  => 'SearchKey',
        'tid'        => 'Tid',
        'userState'  => 'UserState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->userState) {
            $res['UserState'] = $this->userState;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['UserState'])) {
            $model->userState = $map['UserState'];
        }

        return $model;
    }
}
