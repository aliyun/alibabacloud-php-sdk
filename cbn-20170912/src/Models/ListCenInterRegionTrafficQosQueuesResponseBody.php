<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesResponseBody\trafficQosQueues;

class ListCenInterRegionTrafficQosQueuesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficQosQueues[]
     */
    public $trafficQosQueues;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'trafficQosQueues' => 'TrafficQosQueues',
    ];

    public function validate()
    {
        if (\is_array($this->trafficQosQueues)) {
            Model::validateArray($this->trafficQosQueues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficQosQueues) {
            if (\is_array($this->trafficQosQueues)) {
                $res['TrafficQosQueues'] = [];
                $n1 = 0;
                foreach ($this->trafficQosQueues as $item1) {
                    $res['TrafficQosQueues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TrafficQosQueues'])) {
            if (!empty($map['TrafficQosQueues'])) {
                $model->trafficQosQueues = [];
                $n1 = 0;
                foreach ($map['TrafficQosQueues'] as $item1) {
                    $model->trafficQosQueues[$n1++] = trafficQosQueues::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
