<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessagePublishResponseBody\messageTraceLists;

class QueryMqttTraceMessagePublishResponseBody extends Model
{
    /**
     * @var messageTraceLists[]
     */
    public $messageTraceLists;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageTraceLists' => 'MessageTraceLists',
        'requestId'         => 'RequestId',
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
        if (null !== $this->messageTraceLists) {
            if (\is_array($this->messageTraceLists)) {
                $res['MessageTraceLists'] = [];
                $n1                       = 0;
                foreach ($this->messageTraceLists as $item1) {
                    $res['MessageTraceLists'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MessageTraceLists'])) {
            if (!empty($map['MessageTraceLists'])) {
                $model->messageTraceLists = [];
                $n1                       = 0;
                foreach ($map['MessageTraceLists'] as $item1) {
                    $model->messageTraceLists[$n1++] = messageTraceLists::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
