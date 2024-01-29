<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListGlobalAppsResponseBody\globalApps;
use AlibabaCloud\Tea\Model;

class ListGlobalAppsResponseBody extends Model
{
    /**
     * @var globalApps[]
     */
    public $globalApps;

    /**
     * @example easygene.cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $hostId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example ba6d88e2-a6f2-4d2c-a2ae-68b76b078445
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example DA980AD0-158F-44F3-847D-5EAB96C0EB6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'globalApps' => 'GlobalApps',
        'hostId'     => 'HostId',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalApps) {
            $res['GlobalApps'] = [];
            if (null !== $this->globalApps && \is_array($this->globalApps)) {
                $n = 0;
                foreach ($this->globalApps as $item) {
                    $res['GlobalApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
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
     * @return ListGlobalAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalApps'])) {
            if (!empty($map['GlobalApps'])) {
                $model->globalApps = [];
                $n                 = 0;
                foreach ($map['GlobalApps'] as $item) {
                    $model->globalApps[$n++] = null !== $item ? globalApps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
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
