<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponseBody\appInstanceGroupModels;
use AlibabaCloud\Tea\Model;

class ListAppInstanceGroupResponseBody extends Model
{
    /**
     * @var appInstanceGroupModels[]
     */
    public $appInstanceGroupModels;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appInstanceGroupModels' => 'AppInstanceGroupModels',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupModels) {
            $res['AppInstanceGroupModels'] = [];
            if (null !== $this->appInstanceGroupModels && \is_array($this->appInstanceGroupModels)) {
                $n = 0;
                foreach ($this->appInstanceGroupModels as $item) {
                    $res['AppInstanceGroupModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAppInstanceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupModels'])) {
            if (!empty($map['AppInstanceGroupModels'])) {
                $model->appInstanceGroupModels = [];
                $n                             = 0;
                foreach ($map['AppInstanceGroupModels'] as $item) {
                    $model->appInstanceGroupModels[$n++] = null !== $item ? appInstanceGroupModels::fromMap($item) : $item;
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
