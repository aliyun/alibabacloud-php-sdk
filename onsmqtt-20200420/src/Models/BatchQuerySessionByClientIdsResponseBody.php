<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\BatchQuerySessionByClientIdsResponseBody\onlineStatusList;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->onlineStatusList)) {
            Model::validateArray($this->onlineStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onlineStatusList) {
            if (\is_array($this->onlineStatusList)) {
                $res['OnlineStatusList'] = [];
                $n1 = 0;
                foreach ($this->onlineStatusList as $item1) {
                    $res['OnlineStatusList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OnlineStatusList'])) {
            if (!empty($map['OnlineStatusList'])) {
                $model->onlineStatusList = [];
                $n1 = 0;
                foreach ($map['OnlineStatusList'] as $item1) {
                    $model->onlineStatusList[$n1++] = onlineStatusList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
