<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody\data\apiAuthorizedList;

class data extends Model
{
    /**
     * @var apiAuthorizedList[]
     */
    public $apiAuthorizedList;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiAuthorizedList' => 'ApiAuthorizedList',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->apiAuthorizedList)) {
            Model::validateArray($this->apiAuthorizedList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiAuthorizedList) {
            if (\is_array($this->apiAuthorizedList)) {
                $res['ApiAuthorizedList'] = [];
                $n1                       = 0;
                foreach ($this->apiAuthorizedList as $item1) {
                    $res['ApiAuthorizedList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['ApiAuthorizedList'])) {
            if (!empty($map['ApiAuthorizedList'])) {
                $model->apiAuthorizedList = [];
                $n1                       = 0;
                foreach ($map['ApiAuthorizedList'] as $item1) {
                    $model->apiAuthorizedList[$n1++] = apiAuthorizedList::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
