<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionBandwidthQuotaResponseBody\bandwidthQuota;
use AlibabaCloud\Tea\Model;

class DescribeRegionBandwidthQuotaResponseBody extends Model
{
    /**
     * @var bandwidthQuota[]
     */
    public $bandwidthQuota;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidthQuota' => 'BandwidthQuota',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthQuota) {
            $res['BandwidthQuota'] = [];
            if (null !== $this->bandwidthQuota && \is_array($this->bandwidthQuota)) {
                $n = 0;
                foreach ($this->bandwidthQuota as $item) {
                    $res['BandwidthQuota'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeRegionBandwidthQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthQuota'])) {
            if (!empty($map['BandwidthQuota'])) {
                $model->bandwidthQuota = [];
                $n                     = 0;
                foreach ($map['BandwidthQuota'] as $item) {
                    $model->bandwidthQuota[$n++] = null !== $item ? bandwidthQuota::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
