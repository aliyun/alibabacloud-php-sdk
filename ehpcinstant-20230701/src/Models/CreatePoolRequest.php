<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolRequest\resourceLimits;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolRequest\tags;

class CreatePoolRequest extends Model
{
    /**
     * @var string
     */
    public $poolName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var resourceLimits
     */
    public $resourceLimits;

    /**
     * @var string
     */
    public $schedulingPolicyId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'poolName' => 'PoolName',
        'priority' => 'Priority',
        'resourceLimits' => 'ResourceLimits',
        'schedulingPolicyId' => 'SchedulingPolicyId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->resourceLimits) {
            $this->resourceLimits->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->poolName) {
            $res['PoolName'] = $this->poolName;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->resourceLimits) {
            $res['ResourceLimits'] = null !== $this->resourceLimits ? $this->resourceLimits->toArray($noStream) : $this->resourceLimits;
        }

        if (null !== $this->schedulingPolicyId) {
            $res['SchedulingPolicyId'] = $this->schedulingPolicyId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PoolName'])) {
            $model->poolName = $map['PoolName'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ResourceLimits'])) {
            $model->resourceLimits = resourceLimits::fromMap($map['ResourceLimits']);
        }

        if (isset($map['SchedulingPolicyId'])) {
            $model->schedulingPolicyId = $map['SchedulingPolicyId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
