<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\BatchQuerySessionByClientIdsResponseBody\onlineStatusList;
use AlibabaCloud\Tea\Model;

class BatchQuerySessionByClientIdsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var onlineStatusList[]
     */
    public $onlineStatusList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'onlineStatusList' => 'OnlineStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->onlineStatusList) {
            $res['OnlineStatusList'] = [];
            if (null !== $this->onlineStatusList && \is_array($this->onlineStatusList)) {
                $n = 0;
                foreach ($this->onlineStatusList as $item) {
                    $res['OnlineStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchQuerySessionByClientIdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OnlineStatusList'])) {
            if (!empty($map['OnlineStatusList'])) {
                $model->onlineStatusList = [];
                $n                       = 0;
                foreach ($map['OnlineStatusList'] as $item) {
                    $model->onlineStatusList[$n++] = null !== $item ? onlineStatusList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
