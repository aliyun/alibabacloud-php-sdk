<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\SDK\ARMS\V20210519\Models\ListDispatchRuleResponseBody\dispatchRules;
use AlibabaCloud\Tea\Model;

class ListDispatchRuleResponseBody extends Model
{
    /**
     * @var dispatchRules[]
     */
    public $dispatchRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dispatchRules' => 'DispatchRules',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dispatchRules) {
            $res['DispatchRules'] = [];
            if (null !== $this->dispatchRules && \is_array($this->dispatchRules)) {
                $n = 0;
                foreach ($this->dispatchRules as $item) {
                    $res['DispatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDispatchRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DispatchRules'])) {
            if (!empty($map['DispatchRules'])) {
                $model->dispatchRules = [];
                $n                    = 0;
                foreach ($map['DispatchRules'] as $item) {
                    $model->dispatchRules[$n++] = null !== $item ? dispatchRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
