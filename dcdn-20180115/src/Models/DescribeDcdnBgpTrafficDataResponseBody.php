<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpTrafficDataResponseBody\bgpDataInterval;

class DescribeDcdnBgpTrafficDataResponseBody extends Model
{
    /**
     * @var bgpDataInterval[]
     */
    public $bgpDataInterval;

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
    protected $_name = [
        'bgpDataInterval' => 'BgpDataInterval',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->bgpDataInterval)) {
            Model::validateArray($this->bgpDataInterval);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgpDataInterval) {
            if (\is_array($this->bgpDataInterval)) {
                $res['BgpDataInterval'] = [];
                $n1 = 0;
                foreach ($this->bgpDataInterval as $item1) {
                    $res['BgpDataInterval'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpDataInterval'])) {
            if (!empty($map['BgpDataInterval'])) {
                $model->bgpDataInterval = [];
                $n1 = 0;
                foreach ($map['BgpDataInterval'] as $item1) {
                    $model->bgpDataInterval[$n1] = bgpDataInterval::fromMap($item1);
                    ++$n1;
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
