<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RulesResponseBody\listeners;
use AlibabaCloud\Tea\Model;

class DescribeLayer4RulesResponseBody extends Model
{
    /**
     * @description Detailed configuration of port forwarding rules, including the forwarding port, forwarding protocol, and origin server addresses, etc.
     *
     * @var listeners[]
     */
    public $listeners;

    /**
     * @description The ID of the current request.
     *
     * @example 949919A2-6636-1444-9213-AB27DD88AAA8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of returned results.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'listeners' => 'Listeners',
        'requestId' => 'RequestId',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = [];
            if (null !== $this->listeners && \is_array($this->listeners)) {
                $n = 0;
                foreach ($this->listeners as $item) {
                    $res['Listeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer4RulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            if (!empty($map['Listeners'])) {
                $model->listeners = [];
                $n                = 0;
                foreach ($map['Listeners'] as $item) {
                    $model->listeners[$n++] = null !== $item ? listeners::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
