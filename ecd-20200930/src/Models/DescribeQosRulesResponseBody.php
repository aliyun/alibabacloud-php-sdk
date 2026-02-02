<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeQosRulesResponseBody\qosRules;

class DescribeQosRulesResponseBody extends Model
{
    /**
     * @var qosRules[]
     */
    public $qosRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qosRules' => 'QosRules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->qosRules)) {
            Model::validateArray($this->qosRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosRules) {
            if (\is_array($this->qosRules)) {
                $res['QosRules'] = [];
                $n1 = 0;
                foreach ($this->qosRules as $item1) {
                    $res['QosRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['QosRules'])) {
            if (!empty($map['QosRules'])) {
                $model->qosRules = [];
                $n1 = 0;
                foreach ($map['QosRules'] as $item1) {
                    $model->qosRules[$n1] = qosRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
