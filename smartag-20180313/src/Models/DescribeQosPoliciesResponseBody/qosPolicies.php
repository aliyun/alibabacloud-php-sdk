<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosPoliciesResponseBody\qosPolicies\qosPolicy;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosPolicy) {
            $res['QosPolicy'] = [];
            if (null !== $this->qosPolicy && \is_array($this->qosPolicy)) {
                $n = 0;
                foreach ($this->qosPolicy as $item) {
                    $res['QosPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosPolicy'])) {
            if (!empty($map['QosPolicy'])) {
                $model->qosPolicy = [];
                $n                = 0;
                foreach ($map['QosPolicy'] as $item) {
                    $model->qosPolicy[$n++] = null !== $item ? qosPolicy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
