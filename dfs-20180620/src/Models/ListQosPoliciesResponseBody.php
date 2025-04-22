<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\ListQosPoliciesResponseBody\qosPolicies;

class ListQosPoliciesResponseBody extends Model
{
    /**
     * @var qosPolicies[]
     */
    public $qosPolicies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qosPolicies' => 'QosPolicies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->qosPolicies)) {
            Model::validateArray($this->qosPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosPolicies) {
            if (\is_array($this->qosPolicies)) {
                $res['QosPolicies'] = [];
                $n1 = 0;
                foreach ($this->qosPolicies as $item1) {
                    $res['QosPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['QosPolicies'])) {
            if (!empty($map['QosPolicies'])) {
                $model->qosPolicies = [];
                $n1 = 0;
                foreach ($map['QosPolicies'] as $item1) {
                    $model->qosPolicies[$n1++] = qosPolicies::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
