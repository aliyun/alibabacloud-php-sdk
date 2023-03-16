<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponseBody\data\apiAuthorizationList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The APIs on which other users are granted the access permissions and the authorization records.
     *
     * @var apiAuthorizationList[]
     */
    public $apiAuthorizationList;

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
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiAuthorizationList' => 'ApiAuthorizationList',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiAuthorizationList) {
            $res['ApiAuthorizationList'] = [];
            if (null !== $this->apiAuthorizationList && \is_array($this->apiAuthorizationList)) {
                $n = 0;
                foreach ($this->apiAuthorizationList as $item) {
                    $res['ApiAuthorizationList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ApiAuthorizationList'])) {
            if (!empty($map['ApiAuthorizationList'])) {
                $model->apiAuthorizationList = [];
                $n                           = 0;
                foreach ($map['ApiAuthorizationList'] as $item) {
                    $model->apiAuthorizationList[$n++] = null !== $item ? apiAuthorizationList::fromMap($item) : $item;
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
