<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\data;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\quotaInfoList;
use AlibabaCloud\Tea\Model;

class ListQuotasResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var data
     */
    public $data;

    /**
     * @example cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==
     *
     * @var string
     */
    public $marker;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxItem;

    /**
     * @var quotaInfoList[]
     */
    public $quotaInfoList;

    /**
     * @example 0bc12e6f16677875480593081d2956
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'     => 'NextToken',
        'data'          => 'data',
        'marker'        => 'marker',
        'maxItem'       => 'maxItem',
        'quotaInfoList' => 'quotaInfoList',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }
        if (null !== $this->quotaInfoList) {
            $res['quotaInfoList'] = [];
            if (null !== $this->quotaInfoList && \is_array($this->quotaInfoList)) {
                $n = 0;
                foreach ($this->quotaInfoList as $item) {
                    $res['quotaInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }
        if (isset($map['quotaInfoList'])) {
            if (!empty($map['quotaInfoList'])) {
                $model->quotaInfoList = [];
                $n                    = 0;
                foreach ($map['quotaInfoList'] as $item) {
                    $model->quotaInfoList[$n++] = null !== $item ? quotaInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
