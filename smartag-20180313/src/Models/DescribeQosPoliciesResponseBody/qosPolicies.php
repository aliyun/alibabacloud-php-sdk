<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody\qosPolicies\qosPolicy;

class qosPolicies extends Model
{
    /**
     * @var qosPolicy[]
     */
    public $qosPolicy;
    protected $_name = [
        'qosPolicy' => 'QosPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->qosPolicy)) {
            Model::validateArray($this->qosPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosPolicy) {
            if (\is_array($this->qosPolicy)) {
                $res['QosPolicy'] = [];
                $n1 = 0;
                foreach ($this->qosPolicy as $item1) {
                    $res['QosPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QosPolicy'])) {
            if (!empty($map['QosPolicy'])) {
                $model->qosPolicy = [];
                $n1 = 0;
                foreach ($map['QosPolicy'] as $item1) {
                    $model->qosPolicy[$n1] = qosPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
