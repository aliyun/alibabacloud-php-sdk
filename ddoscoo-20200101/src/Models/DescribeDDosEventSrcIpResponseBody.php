<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventSrcIpResponseBody\ips;
use AlibabaCloud\Tea\Model;

class DescribeDDosEventSrcIpResponseBody extends Model
{
    /**
     * @description An array that consists of information about the source IP address of the volumetric attack.
     *
     * @var ips[]
     */
    public $ips;

    /**
     * @description The ID of the request.
     *
     * @example 38A0224E-FDBC-4733-A362-B391827FC1E9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ips'       => 'Ips',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return DescribeDDosEventSrcIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n          = 0;
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
