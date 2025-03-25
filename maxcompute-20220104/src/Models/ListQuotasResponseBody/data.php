<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\data\quotaInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description A pagination token. Only continuous page turning is supported. If NextToken is not empty, the next page exists. The value of NextToken can be used in the next request to retrieve a new page of results.
     *
     * @example "abcde"
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Indicates the marker after which the returned list begins.
     *
     * @example cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==
     *
     * @var string
     */
    public $marker;

    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxItem;

    /**
     * @description The list of quotas.
     *
     * @var quotaInfoList[]
     */
    public $quotaInfoList;
    protected $_name = [
        'nextToken' => 'NextToken',
        'marker' => 'marker',
        'maxItem' => 'maxItem',
        'quotaInfoList' => 'quotaInfoList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
                $n = 0;
                foreach ($map['quotaInfoList'] as $item) {
                    $model->quotaInfoList[$n++] = null !== $item ? quotaInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
