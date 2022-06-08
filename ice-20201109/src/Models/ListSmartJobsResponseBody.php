<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList;
use AlibabaCloud\Tea\Model;

class ListSmartJobsResponseBody extends Model
{
    /**
     * @description 本次请求所返回的最大记录条数，最后一页前每页记录条数为MaxResults取值。  例如：  正例：10,10,5，反例：10,5,10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description 用来表示当前调用返回读取到的位置，空代表数据已经读取完毕。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @var smartJobList[]
     */
    public $smartJobList;

    /**
     * @description 本次请求条件下的数据总量，此参数为可选参数，默认可不返回。
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'smartJobList' => 'SmartJobList',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smartJobList) {
            $res['SmartJobList'] = [];
            if (null !== $this->smartJobList && \is_array($this->smartJobList)) {
                $n = 0;
                foreach ($this->smartJobList as $item) {
                    $res['SmartJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListSmartJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmartJobList'])) {
            if (!empty($map['SmartJobList'])) {
                $model->smartJobList = [];
                $n                   = 0;
                foreach ($map['SmartJobList'] as $item) {
                    $model->smartJobList[$n++] = null !== $item ? smartJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
