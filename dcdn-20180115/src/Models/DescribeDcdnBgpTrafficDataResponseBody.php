<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpTrafficDataResponseBody\bgpDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnBgpTrafficDataResponseBody extends Model
{
    /**
     * @var bgpDataInterval[]
     */
    public $bgpDataInterval;

    /**
     * @example 2018-11-30T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example E9D3257A-1B7C-414C-90C1-8D07AC47BCAC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2018-11-29T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bgpDataInterval' => 'BgpDataInterval',
        'endTime'         => 'EndTime',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpDataInterval) {
            $res['BgpDataInterval'] = [];
            if (null !== $this->bgpDataInterval && \is_array($this->bgpDataInterval)) {
                $n = 0;
                foreach ($this->bgpDataInterval as $item) {
                    $res['BgpDataInterval'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnBgpTrafficDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpDataInterval'])) {
            if (!empty($map['BgpDataInterval'])) {
                $model->bgpDataInterval = [];
                $n                      = 0;
                foreach ($map['BgpDataInterval'] as $item) {
                    $model->bgpDataInterval[$n++] = null !== $item ? bgpDataInterval::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
