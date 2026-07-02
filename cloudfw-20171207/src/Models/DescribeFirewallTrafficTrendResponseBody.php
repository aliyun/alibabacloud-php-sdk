<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallTrafficTrendResponseBody\dataList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallTrafficTrendResponseBody\maxBandwidthTimeBps;

class DescribeFirewallTrafficTrendResponseBody extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var int
     */
    public $maxBandwidthTime;

    /**
     * @var maxBandwidthTimeBps
     */
    public $maxBandwidthTimeBps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataList' => 'DataList',
        'maxBandwidthTime' => 'MaxBandwidthTime',
        'maxBandwidthTimeBps' => 'MaxBandwidthTimeBps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        if (null !== $this->maxBandwidthTimeBps) {
            $this->maxBandwidthTimeBps->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['DataList'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['DataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxBandwidthTime) {
            $res['MaxBandwidthTime'] = $this->maxBandwidthTime;
        }

        if (null !== $this->maxBandwidthTimeBps) {
            $res['MaxBandwidthTimeBps'] = null !== $this->maxBandwidthTimeBps ? $this->maxBandwidthTimeBps->toArray($noStream) : $this->maxBandwidthTimeBps;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['DataList'] as $item1) {
                    $model->dataList[$n1] = dataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxBandwidthTime'])) {
            $model->maxBandwidthTime = $map['MaxBandwidthTime'];
        }

        if (isset($map['MaxBandwidthTimeBps'])) {
            $model->maxBandwidthTimeBps = maxBandwidthTimeBps::fromMap($map['MaxBandwidthTimeBps']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
