<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselineItemsResponseBody\baselineItems;
use AlibabaCloud\Tea\Model;

class ListAccountFactoryBaselineItemsResponseBody extends Model
{
    /**
     * @var baselineItems[]
     */
    public $baselineItems;

    /**
     * @example AAAAACDGQdAEX3m42z3sQ+f3VTK2Xr2DzYbz/SAfc/zJRqod
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example B40D73D8-76AC-5D3C-AC63-4FC8AFCE6671
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baselineItems' => 'BaselineItems',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineItems) {
            $res['BaselineItems'] = [];
            if (null !== $this->baselineItems && \is_array($this->baselineItems)) {
                $n = 0;
                foreach ($this->baselineItems as $item) {
                    $res['BaselineItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccountFactoryBaselineItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItems'])) {
            if (!empty($map['BaselineItems'])) {
                $model->baselineItems = [];
                $n                    = 0;
                foreach ($map['BaselineItems'] as $item) {
                    $model->baselineItems[$n++] = null !== $item ? baselineItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
