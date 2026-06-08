<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policy;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policyFunctions;

class GenerateTemplatePolicyResponseBody extends Model
{
    /**
     * @var policy
     */
    public $policy;

    /**
     * @var policyFunctions[]
     */
    public $policyFunctions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policy' => 'Policy',
        'policyFunctions' => 'PolicyFunctions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        if (\is_array($this->policyFunctions)) {
            Model::validateArray($this->policyFunctions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
        }

        if (null !== $this->policyFunctions) {
            if (\is_array($this->policyFunctions)) {
                $res['PolicyFunctions'] = [];
                $n1 = 0;
                foreach ($this->policyFunctions as $item1) {
                    $res['PolicyFunctions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        if (isset($map['PolicyFunctions'])) {
            if (!empty($map['PolicyFunctions'])) {
                $model->policyFunctions = [];
                $n1 = 0;
                foreach ($map['PolicyFunctions'] as $item1) {
                    $model->policyFunctions[$n1] = policyFunctions::fromMap($item1);
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
