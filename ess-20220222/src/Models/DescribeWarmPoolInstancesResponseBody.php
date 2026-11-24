<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeWarmPoolInstancesResponseBody\warmPoolInstances;

class DescribeWarmPoolInstancesResponseBody extends Model
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
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var warmPoolInstances[]
     */
    public $warmPoolInstances;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'scalingGroupId' => 'ScalingGroupId',
        'warmPoolInstances' => 'WarmPoolInstances',
    ];

    public function validate()
    {
        if (\is_array($this->warmPoolInstances)) {
            Model::validateArray($this->warmPoolInstances);
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

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        if (null !== $this->warmPoolInstances) {
            if (\is_array($this->warmPoolInstances)) {
                $res['WarmPoolInstances'] = [];
                $n1 = 0;
                foreach ($this->warmPoolInstances as $item1) {
                    $res['WarmPoolInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        if (isset($map['WarmPoolInstances'])) {
            if (!empty($map['WarmPoolInstances'])) {
                $model->warmPoolInstances = [];
                $n1 = 0;
                foreach ($map['WarmPoolInstances'] as $item1) {
                    $model->warmPoolInstances[$n1] = warmPoolInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
