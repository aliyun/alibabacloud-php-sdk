<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageOfClientResponseBody\messageOfClientList;

class QueryMqttTraceMessageOfClientResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var messageOfClientList[]
     */
    public $messageOfClientList;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->messageOfClientList)) {
            Model::validateArray($this->messageOfClientList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->messageOfClientList) {
            if (\is_array($this->messageOfClientList)) {
                $res['MessageOfClientList'] = [];
                $n1                         = 0;
                foreach ($this->messageOfClientList as $item1) {
                    $res['MessageOfClientList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['MessageOfClientList'])) {
            if (!empty($map['MessageOfClientList'])) {
                $model->messageOfClientList = [];
                $n1                         = 0;
                foreach ($map['MessageOfClientList'] as $item1) {
                    $model->messageOfClientList[$n1++] = messageOfClientList::fromMap($item1);
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
