<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListChangeSetsResponseBody\changeSets;
use AlibabaCloud\Tea\Model;

class ListChangeSetsResponseBody extends Model
{
    /**
     * @description The list of change sets.
     *
     * @var changeSets[]
     */
    public $changeSets;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example B288A0BE-D927-4888-B0F7-B35EF84B6E6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of queried entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'changeSets' => 'ChangeSets',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeSets) {
            $res['ChangeSets'] = [];
            if (null !== $this->changeSets && \is_array($this->changeSets)) {
                $n = 0;
                foreach ($this->changeSets as $item) {
                    $res['ChangeSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeSetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeSets'])) {
            if (!empty($map['ChangeSets'])) {
                $model->changeSets = [];
                $n                 = 0;
                foreach ($map['ChangeSets'] as $item) {
                    $model->changeSets[$n++] = null !== $item ? changeSets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
