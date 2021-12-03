<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetGameStockResponseBody\instanceStockList;
use AlibabaCloud\Tea\Model;

class GetGameStockResponseBody extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var instanceStockList[]
     */
    public $instanceStockList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gameId'            => 'GameId',
        'instanceStockList' => 'InstanceStockList',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->instanceStockList) {
            $res['InstanceStockList'] = [];
            if (null !== $this->instanceStockList && \is_array($this->instanceStockList)) {
                $n = 0;
                foreach ($this->instanceStockList as $item) {
                    $res['InstanceStockList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGameStockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['InstanceStockList'])) {
            if (!empty($map['InstanceStockList'])) {
                $model->instanceStockList = [];
                $n                        = 0;
                foreach ($map['InstanceStockList'] as $item) {
                    $model->instanceStockList[$n++] = null !== $item ? instanceStockList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
