<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageSubscribeResponseBody\messageTraceLists;

class QueryMqttTraceMessageSubscribeResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var messageTraceLists[]
     */
    public $messageTraceLists;

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
        'currentPage' => 'CurrentPage',
        'messageTraceLists' => 'MessageTraceLists',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->messageTraceLists)) {
            Model::validateArray($this->messageTraceLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->messageTraceLists) {
            if (\is_array($this->messageTraceLists)) {
                $res['MessageTraceLists'] = [];
                $n1 = 0;
                foreach ($this->messageTraceLists as $item1) {
                    $res['MessageTraceLists'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['MessageTraceLists'])) {
            if (!empty($map['MessageTraceLists'])) {
                $model->messageTraceLists = [];
                $n1 = 0;
                foreach ($map['MessageTraceLists'] as $item1) {
                    $model->messageTraceLists[$n1++] = messageTraceLists::fromMap($item1);
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
