<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesResponseBody\nodeModels;
use AlibabaCloud\Tea\Model;

class ListNodesResponseBody extends Model
{
    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @description The resource nodes.
     *
     * @var nodeModels[]
     */
    public $nodeModels;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $perPageSize;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $toPage;
    protected $_name = [
        'count' => 'Count',
        'nodeModels' => 'NodeModels',
        'perPageSize' => 'PerPageSize',
        'requestId' => 'RequestId',
        'toPage' => 'ToPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->nodeModels) {
            $res['NodeModels'] = [];
            if (null !== $this->nodeModels && \is_array($this->nodeModels)) {
                $n = 0;
                foreach ($this->nodeModels as $item) {
                    $res['NodeModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->perPageSize) {
            $res['PerPageSize'] = $this->perPageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->toPage) {
            $res['ToPage'] = $this->toPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['NodeModels'])) {
            if (!empty($map['NodeModels'])) {
                $model->nodeModels = [];
                $n = 0;
                foreach ($map['NodeModels'] as $item) {
                    $model->nodeModels[$n++] = null !== $item ? nodeModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PerPageSize'])) {
            $model->perPageSize = $map['PerPageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ToPage'])) {
            $model->toPage = $map['ToPage'];
        }

        return $model;
    }
}
