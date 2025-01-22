<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\pagingInfo\resourceGroupList;

class pagingInfo extends Model
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
     * @var resourceGroupList[]
     */
    public $resourceGroupList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'resourceGroupList' => 'ResourceGroupList',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroupList)) {
            Model::validateArray($this->resourceGroupList);
        }
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

        if (null !== $this->resourceGroupList) {
            if (\is_array($this->resourceGroupList)) {
                $res['ResourceGroupList'] = [];
                $n1                       = 0;
                foreach ($this->resourceGroupList as $item1) {
                    $res['ResourceGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceGroupList'])) {
            if (!empty($map['ResourceGroupList'])) {
                $model->resourceGroupList = [];
                $n1                       = 0;
                foreach ($map['ResourceGroupList'] as $item1) {
                    $model->resourceGroupList[$n1++] = resourceGroupList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
