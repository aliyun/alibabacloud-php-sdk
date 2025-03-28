<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponseBody\data\apiAuthorizationList;

class data extends Model
{
    /**
     * @var apiAuthorizationList[]
     */
    public $apiAuthorizationList;

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
        'apiAuthorizationList' => 'ApiAuthorizationList',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->apiAuthorizationList)) {
            Model::validateArray($this->apiAuthorizationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiAuthorizationList) {
            if (\is_array($this->apiAuthorizationList)) {
                $res['ApiAuthorizationList'] = [];
                $n1 = 0;
                foreach ($this->apiAuthorizationList as $item1) {
                    $res['ApiAuthorizationList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiAuthorizationList'])) {
            if (!empty($map['ApiAuthorizationList'])) {
                $model->apiAuthorizationList = [];
                $n1 = 0;
                foreach ($map['ApiAuthorizationList'] as $item1) {
                    $model->apiAuthorizationList[$n1++] = apiAuthorizationList::fromMap($item1);
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
