<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesResponseBody\ignoredInstances;

class RemoveInstancesResponseBody extends Model
{
    /**
     * @var ignoredInstances[]
     */
    public $ignoredInstances;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scalingActivityId;
    protected $_name = [
        'ignoredInstances' => 'IgnoredInstances',
        'requestId' => 'RequestId',
        'scalingActivityId' => 'ScalingActivityId',
    ];

    public function validate()
    {
        if (\is_array($this->ignoredInstances)) {
            Model::validateArray($this->ignoredInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoredInstances) {
            if (\is_array($this->ignoredInstances)) {
                $res['IgnoredInstances'] = [];
                $n1 = 0;
                foreach ($this->ignoredInstances as $item1) {
                    $res['IgnoredInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
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
        if (isset($map['IgnoredInstances'])) {
            if (!empty($map['IgnoredInstances'])) {
                $model->ignoredInstances = [];
                $n1 = 0;
                foreach ($map['IgnoredInstances'] as $item1) {
                    $model->ignoredInstances[$n1] = ignoredInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScalingActivityId'])) {
            $model->scalingActivityId = $map['ScalingActivityId'];
        }

        return $model;
    }
}
