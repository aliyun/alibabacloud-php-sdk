<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListSourcesResponseBody extends Model
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
     * @example 20
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
     * @description The sources.
     *
     * @var ChannelAssemblySource[]
     */
    public $sourceList;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'sourceList' => 'SourceList',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->sourceList) {
            $res['SourceList'] = [];
            if (null !== $this->sourceList && \is_array($this->sourceList)) {
                $n = 0;
                foreach ($this->sourceList as $item) {
                    $res['SourceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListSourcesResponseBody
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
        if (isset($map['SourceList'])) {
            if (!empty($map['SourceList'])) {
                $model->sourceList = [];
                $n                 = 0;
                foreach ($map['SourceList'] as $item) {
                    $model->sourceList[$n++] = null !== $item ? ChannelAssemblySource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
