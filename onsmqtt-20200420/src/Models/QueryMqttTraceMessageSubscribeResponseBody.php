<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageSubscribeResponseBody\messageTraceLists;
use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessageSubscribeResponseBody extends Model
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
     * @description The delivery trace of the queried message.
     *
     * @var messageTraceLists[]
     */
    public $messageTraceLists;

    /**
     * @description The number of entries returned per page.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The unique ID that the system generates for the request. You can use the ID to troubleshoot issues. This parameter is a common parameter.
     *
     * @example 4E685844-ADAF-4D85-9EAC-F9471E8C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned delivery traces.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'messageTraceLists' => 'MessageTraceLists',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'total'             => 'Total',
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
        if (null !== $this->messageTraceLists) {
            $res['MessageTraceLists'] = [];
            if (null !== $this->messageTraceLists && \is_array($this->messageTraceLists)) {
                $n = 0;
                foreach ($this->messageTraceLists as $item) {
                    $res['MessageTraceLists'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return QueryMqttTraceMessageSubscribeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
