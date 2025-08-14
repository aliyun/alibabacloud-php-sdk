<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayTrafficDetailResponseBody\trafficList;

class DescribePostpayTrafficDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var trafficList[]
     */
    public $trafficList;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'trafficList' => 'TrafficList',
    ];

    public function validate()
    {
        if (\is_array($this->trafficList)) {
            Model::validateArray($this->trafficList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->trafficList) {
            if (\is_array($this->trafficList)) {
                $res['TrafficList'] = [];
                $n1 = 0;
                foreach ($this->trafficList as $item1) {
                    $res['TrafficList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TrafficList'])) {
            if (!empty($map['TrafficList'])) {
                $model->trafficList = [];
                $n1 = 0;
                foreach ($map['TrafficList'] as $item1) {
                    $model->trafficList[$n1] = trafficList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
