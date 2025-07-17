<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDispatchRuleResponseBody\dispatchRules;
use AlibabaCloud\Tea\Model;

class ListDispatchRuleResponseBody extends Model
{
    /**
     * @description The returned struct.
     *
     * @var dispatchRules[]
     */
    public $dispatchRules;

    /**
     * @description The request ID.
     *
     * @example 34ED024E-9E31-434A-9E4E-D9D15C3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dispatchRules' => 'DispatchRules',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
                $n = 0;
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
