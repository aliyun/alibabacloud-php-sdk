<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListSourceLocationsResponseBody extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 20. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description **Request ID**
     *
     * @example xxx-xxxx-xxxxx-xxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The source locations.
     *
     * @var ChannelAssemblySourceLocation[]
     */
    public $sourceLocationList;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'sourceLocationList' => 'SourceLocationList',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceLocationList) {
            $res['SourceLocationList'] = [];
            if (null !== $this->sourceLocationList && \is_array($this->sourceLocationList)) {
                $n = 0;
                foreach ($this->sourceLocationList as $item) {
                    $res['SourceLocationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSourceLocationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceLocationList'])) {
            if (!empty($map['SourceLocationList'])) {
                $model->sourceLocationList = [];
                $n                         = 0;
                foreach ($map['SourceLocationList'] as $item) {
                    $model->sourceLocationList[$n++] = null !== $item ? ChannelAssemblySourceLocation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
