<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models;

use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeTopTrafficResponse\trafficList;
use AlibabaCloud\Tea\Model;

class DescribeTopTrafficResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var trafficList[]
     */
    public $trafficList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'total'       => 'Total',
        'trafficList' => 'TrafficList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('trafficList', $this->trafficList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->trafficList) {
            $res['TrafficList'] = [];
            if (null !== $this->trafficList && \is_array($this->trafficList)) {
                $n = 0;
                foreach ($this->trafficList as $item) {
                    $res['TrafficList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTopTrafficResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TrafficList'])) {
            if (!empty($map['TrafficList'])) {
                $model->trafficList = [];
                $n                  = 0;
                foreach ($map['TrafficList'] as $item) {
                    $model->trafficList[$n++] = null !== $item ? trafficList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
