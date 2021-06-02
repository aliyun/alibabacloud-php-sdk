<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageSubscribeResponseBody\messageTraceLists;
use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessageSubscribeResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var messageTraceLists[]
     */
    public $messageTraceLists;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'requestId'         => 'RequestId',
        'pageSize'          => 'PageSize',
        'total'             => 'Total',
        'messageTraceLists' => 'MessageTraceLists',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->messageTraceLists) {
            $res['MessageTraceLists'] = [];
            if (null !== $this->messageTraceLists && \is_array($this->messageTraceLists)) {
                $n = 0;
                foreach ($this->messageTraceLists as $item) {
                    $res['MessageTraceLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMqttTraceMessageSubscribeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['MessageTraceLists'])) {
            if (!empty($map['MessageTraceLists'])) {
                $model->messageTraceLists = [];
                $n                        = 0;
                foreach ($map['MessageTraceLists'] as $item) {
                    $model->messageTraceLists[$n++] = null !== $item ? messageTraceLists::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
