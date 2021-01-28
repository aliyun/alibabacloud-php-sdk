<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpBpsDataResponseBody\bgpDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnBgpBpsDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var bgpDataInterval[]
     */
    public $bgpDataInterval;
    protected $_name = [
        'endTime'         => 'EndTime',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
        'bgpDataInterval' => 'BgpDataInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->bgpDataInterval) {
            $res['BgpDataInterval'] = [];
            if (null !== $this->bgpDataInterval && \is_array($this->bgpDataInterval)) {
                $n = 0;
                foreach ($this->bgpDataInterval as $item) {
                    $res['BgpDataInterval'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnBgpBpsDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['BgpDataInterval'])) {
            if (!empty($map['BgpDataInterval'])) {
                $model->bgpDataInterval = [];
                $n                      = 0;
                foreach ($map['BgpDataInterval'] as $item) {
                    $model->bgpDataInterval[$n++] = null !== $item ? bgpDataInterval::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
