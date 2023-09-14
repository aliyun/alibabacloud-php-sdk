<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationConfigsResponseBody\applicationConfigs;
use AlibabaCloud\Tea\Model;

class ListApplicationConfigsResponseBody extends Model
{
    /**
     * @var applicationConfigs[]
     */
    public $applicationConfigs;

    /**
     * @description 本次请求所返回的最大记录条数。
     *
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 返回读取到的数据位置，空代表数据已经读取完毕。
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求ID。
     *
     * @example 9E3A7161-EB7B-172B-8D18-FFB06BA3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 本次请求条件下的数据总量。
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'applicationConfigs' => 'ApplicationConfigs',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            $res['ApplicationConfigs'] = [];
            if (null !== $this->applicationConfigs && \is_array($this->applicationConfigs)) {
                $n = 0;
                foreach ($this->applicationConfigs as $item) {
                    $res['ApplicationConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListApplicationConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationConfigs'])) {
            if (!empty($map['ApplicationConfigs'])) {
                $model->applicationConfigs = [];
                $n                         = 0;
                foreach ($map['ApplicationConfigs'] as $item) {
                    $model->applicationConfigs[$n++] = null !== $item ? applicationConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
