<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody\data\apiAuthorizedList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of APIs that you are authorized to access.
     *
     * @var apiAuthorizedList[]
     */
    public $apiAuthorizedList;

    /**
     * @description The page number of the returned page. The value of this parameter is the same as that of the PageNumber parameter in the request.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 100
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiAuthorizedList) {
            $res['ApiAuthorizedList'] = [];
            if (null !== $this->apiAuthorizedList && \is_array($this->apiAuthorizedList)) {
                $n = 0;
                foreach ($this->apiAuthorizedList as $item) {
                    $res['ApiAuthorizedList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiAuthorizedList'])) {
            if (!empty($map['ApiAuthorizedList'])) {
                $model->apiAuthorizedList = [];
                $n                        = 0;
                foreach ($map['ApiAuthorizedList'] as $item) {
                    $model->apiAuthorizedList[$n++] = null !== $item ? apiAuthorizedList::fromMap($item) : $item;
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
