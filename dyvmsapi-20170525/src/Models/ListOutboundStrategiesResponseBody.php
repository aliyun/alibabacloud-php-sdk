<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesResponseBody\outboundStrategies;
use AlibabaCloud\Tea\Model;

class ListOutboundStrategiesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var outboundStrategies[]
     */
    public $outboundStrategies;
    protected $_name = [
        'code'               => 'Code',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'outboundStrategies' => 'OutboundStrategies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->outboundStrategies) {
            $res['OutboundStrategies'] = [];
            if (null !== $this->outboundStrategies && \is_array($this->outboundStrategies)) {
                $n = 0;
                foreach ($this->outboundStrategies as $item) {
                    $res['OutboundStrategies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOutboundStrategiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OutboundStrategies'])) {
            if (!empty($map['OutboundStrategies'])) {
                $model->outboundStrategies = [];
                $n                         = 0;
                foreach ($map['OutboundStrategies'] as $item) {
                    $model->outboundStrategies[$n++] = null !== $item ? outboundStrategies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
