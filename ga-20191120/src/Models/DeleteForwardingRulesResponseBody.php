<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DeleteForwardingRulesResponseBody\forwardingRules;
use AlibabaCloud\Tea\Model;

class DeleteForwardingRulesResponseBody extends Model
{
    /**
     * @description Details about the forwarding rules.
     *
     * @var forwardingRules[]
     */
    public $forwardingRules;

    /**
     * @description The ID of the request.
     *
     * @example CFC67ED9-4AB1-431F-B6E3-A752B7B8CCD4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forwardingRules' => 'ForwardingRules',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardingRules) {
            $res['ForwardingRules'] = [];
            if (null !== $this->forwardingRules && \is_array($this->forwardingRules)) {
                $n = 0;
                foreach ($this->forwardingRules as $item) {
                    $res['ForwardingRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DeleteForwardingRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardingRules'])) {
            if (!empty($map['ForwardingRules'])) {
                $model->forwardingRules = [];
                $n                      = 0;
                foreach ($map['ForwardingRules'] as $item) {
                    $model->forwardingRules[$n++] = null !== $item ? forwardingRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
