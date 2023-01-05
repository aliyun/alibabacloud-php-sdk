<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupResponseBody\data\userGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;

    /**
     * @var userGroupList[]
     */
    public $userGroupList;
    protected $_name = [
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'total'         => 'Total',
        'userGroupList' => 'UserGroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->userGroupList) {
            $res['UserGroupList'] = [];
            if (null !== $this->userGroupList && \is_array($this->userGroupList)) {
                $n = 0;
                foreach ($this->userGroupList as $item) {
                    $res['UserGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['UserGroupList'])) {
            if (!empty($map['UserGroupList'])) {
                $model->userGroupList = [];
                $n                    = 0;
                foreach ($map['UserGroupList'] as $item) {
                    $model->userGroupList[$n++] = null !== $item ? userGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
