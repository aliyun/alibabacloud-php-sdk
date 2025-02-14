<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListVodPackagingGroupsResponseBody extends Model
{
    /**
     * @var VodPackagingGroup[]
     */
    public $packagingGroups;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'packagingGroups' => 'PackagingGroups',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'sortBy'          => 'SortBy',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->packagingGroups)) {
            Model::validateArray($this->packagingGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packagingGroups) {
            if (\is_array($this->packagingGroups)) {
                $res['PackagingGroups'] = [];
                $n1                     = 0;
                foreach ($this->packagingGroups as $item1) {
                    $res['PackagingGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PackagingGroups'])) {
            if (!empty($map['PackagingGroups'])) {
                $model->packagingGroups = [];
                $n1                     = 0;
                foreach ($map['PackagingGroups'] as $item1) {
                    $model->packagingGroups[$n1++] = VodPackagingGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
