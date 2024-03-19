<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20191211\Models;

use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\BatchQuerySessionByClientIdsResponseBody\onlineStatusList;
use AlibabaCloud\Tea\Model;

class BatchQuerySessionByClientIdsResponseBody extends Model
{
    /**
     * @var onlineStatusList[]
     */
    public $onlineStatusList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'onlineStatusList' => 'OnlineStatusList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineStatusList) {
            $res['OnlineStatusList'] = [];
            if (null !== $this->onlineStatusList && \is_array($this->onlineStatusList)) {
                $n = 0;
                foreach ($this->onlineStatusList as $item) {
                    $res['OnlineStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OnlineStatusList'])) {
            if (!empty($map['OnlineStatusList'])) {
                $model->onlineStatusList = [];
                $n                       = 0;
                foreach ($map['OnlineStatusList'] as $item) {
                    $model->onlineStatusList[$n++] = null !== $item ? onlineStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
