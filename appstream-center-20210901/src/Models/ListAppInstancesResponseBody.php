<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstancesResponseBody\appInstanceModels;
use AlibabaCloud\Tea\Model;

class ListAppInstancesResponseBody extends Model
{
    /**
     * @var appInstanceModels[]
     */
    public $appInstanceModels;

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
     * @example 18
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appInstanceModels' => 'AppInstanceModels',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceModels) {
            $res['AppInstanceModels'] = [];
            if (null !== $this->appInstanceModels && \is_array($this->appInstanceModels)) {
                $n = 0;
                foreach ($this->appInstanceModels as $item) {
                    $res['AppInstanceModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAppInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceModels'])) {
            if (!empty($map['AppInstanceModels'])) {
                $model->appInstanceModels = [];
                $n                        = 0;
                foreach ($map['AppInstanceModels'] as $item) {
                    $model->appInstanceModels[$n++] = null !== $item ? appInstanceModels::fromMap($item) : $item;
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
