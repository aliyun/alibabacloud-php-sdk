<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupResponseBody\data\userGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var userGroupList[]
     */
    public $userGroupList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageNo'        => 'PageNo',
        'userGroupList' => 'UserGroupList',
        'pageSize'      => 'PageSize',
        'total'         => 'Total',
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
        if (null !== $this->userGroupList) {
            $res['UserGroupList'] = [];
            if (null !== $this->userGroupList && \is_array($this->userGroupList)) {
                $n = 0;
                foreach ($this->userGroupList as $item) {
                    $res['UserGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['UserGroupList'])) {
            if (!empty($map['UserGroupList'])) {
                $model->userGroupList = [];
                $n                    = 0;
                foreach ($map['UserGroupList'] as $item) {
                    $model->userGroupList[$n++] = null !== $item ? userGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
