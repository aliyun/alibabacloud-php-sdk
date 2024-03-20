<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageOfClientResponseBody\messageOfClientList;
use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessageOfClientResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The returned messages.
     *
     * @var messageOfClientList[]
     */
    public $messageOfClientList;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID. You can use the ID to troubleshoot issues. This parameter is a common parameter.
     *
     * @example B096B9D6-62F3-4567-BB59-58D1362E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of messages returned.
     *
     * @example 5
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage'         => 'CurrentPage',
        'messageOfClientList' => 'MessageOfClientList',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'total'               => 'Total',
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
        if (null !== $this->messageOfClientList) {
            $res['MessageOfClientList'] = [];
            if (null !== $this->messageOfClientList && \is_array($this->messageOfClientList)) {
                $n = 0;
                foreach ($this->messageOfClientList as $item) {
                    $res['MessageOfClientList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['MessageOfClientList'])) {
            if (!empty($map['MessageOfClientList'])) {
                $model->messageOfClientList = [];
                $n                          = 0;
                foreach ($map['MessageOfClientList'] as $item) {
                    $model->messageOfClientList[$n++] = null !== $item ? messageOfClientList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
