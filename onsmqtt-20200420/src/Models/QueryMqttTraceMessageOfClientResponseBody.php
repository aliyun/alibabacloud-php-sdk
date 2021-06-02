<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageOfClientResponseBody\messageOfClientList;
use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessageOfClientResponseBody extends Model
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
     * @var messageOfClientList[]
     */
    public $messageOfClientList;
    protected $_name = [
        'currentPage'         => 'CurrentPage',
        'requestId'           => 'RequestId',
        'pageSize'            => 'PageSize',
        'total'               => 'Total',
        'messageOfClientList' => 'MessageOfClientList',
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
        if (null !== $this->messageOfClientList) {
            $res['MessageOfClientList'] = [];
            if (null !== $this->messageOfClientList && \is_array($this->messageOfClientList)) {
                $n = 0;
                foreach ($this->messageOfClientList as $item) {
                    $res['MessageOfClientList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMqttTraceMessageOfClientResponseBody
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
        if (isset($map['MessageOfClientList'])) {
            if (!empty($map['MessageOfClientList'])) {
                $model->messageOfClientList = [];
                $n                          = 0;
                foreach ($map['MessageOfClientList'] as $item) {
                    $model->messageOfClientList[$n++] = null !== $item ? messageOfClientList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
