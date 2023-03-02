<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of entries.
     *
     * @var apis[]
     */
    public $apis;

    /**
     * @description The information about the APIs in the development state.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number of the returned page. The value of this parameter is the same as that of the PageNumber parameter in the request.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries returned per page. Default value: 10. A maximum of 100 entries can be returned on each page.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apis'       => 'Apis',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apis) {
            $res['Apis'] = [];
            if (null !== $this->apis && \is_array($this->apis)) {
                $n = 0;
                foreach ($this->apis as $item) {
                    $res['Apis'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Apis'])) {
            if (!empty($map['Apis'])) {
                $model->apis = [];
                $n           = 0;
                foreach ($map['Apis'] as $item) {
                    $model->apis[$n++] = null !== $item ? apis::fromMap($item) : $item;
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
