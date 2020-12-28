<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerListResponseBody\consumerList;
use AlibabaCloud\Tea\Model;

class GetConsumerListResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var consumerList[]
     */
    public $consumerList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'code'         => 'Code',
        'consumerList' => 'ConsumerList',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consumerList) {
            $res['ConsumerList'] = [];
            if (null !== $this->consumerList && \is_array($this->consumerList)) {
                $n = 0;
                foreach ($this->consumerList as $item) {
                    $res['ConsumerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConsumerListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsumerList'])) {
            if (!empty($map['ConsumerList'])) {
                $model->consumerList = [];
                $n                   = 0;
                foreach ($map['ConsumerList'] as $item) {
                    $model->consumerList[$n++] = null !== $item ? consumerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
