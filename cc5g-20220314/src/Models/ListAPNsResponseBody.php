<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAPNsResponseBody\APNs;
use AlibabaCloud\Tea\Model;

class ListAPNsResponseBody extends Model
{
    /**
     * @var APNs[]
     */
    public $APNs;

    /**
     * @example 20
     *
     * @var string
     */
    public $maxResults;

    /**
     * @example vhNxI+jwQfkLCUChCQ+iOoiRkyUbtAilGSvWuwktFBxF+bar2HpV0efI6n1+GkMv
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example A175C091-3910-51AF-8D84-D5717B9B8D38
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'APNs'       => 'APNs',
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
        if (null !== $this->APNs) {
            $res['APNs'] = [];
            if (null !== $this->APNs && \is_array($this->APNs)) {
                $n = 0;
                foreach ($this->APNs as $item) {
                    $res['APNs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAPNsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APNs'])) {
            if (!empty($map['APNs'])) {
                $model->APNs = [];
                $n           = 0;
                foreach ($map['APNs'] as $item) {
                    $model->APNs[$n++] = null !== $item ? APNs::fromMap($item) : $item;
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
