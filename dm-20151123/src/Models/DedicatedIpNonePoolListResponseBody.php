<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpNonePoolListResponseBody\ips;
use AlibabaCloud\Tea\Model;

class DedicatedIpNonePoolListResponseBody extends Model
{
    /**
     * @description Information on IPs not added to the IP pool
     *
     * @var ips[]
     */
    public $ips;

    /**
     * @description Request ID
     *
     * @example xxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ips' => 'Ips',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ips) {
            $res['Ips'] = [];
            if (null !== $this->ips && \is_array($this->ips)) {
                $n = 0;
                foreach ($this->ips as $item) {
                    $res['Ips'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DedicatedIpNonePoolListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n = 0;
                foreach ($map['Ips'] as $item) {
                    $model->ips[$n++] = null !== $item ? ips::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
