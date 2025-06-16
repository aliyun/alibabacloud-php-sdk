<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GenerateServicePolicyResponseBody\missingPolicy;

class GenerateServicePolicyResponseBody extends Model
{
    /**
     * @var missingPolicy[]
     */
    public $missingPolicy;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'missingPolicy' => 'MissingPolicy',
        'policy' => 'Policy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->missingPolicy)) {
            Model::validateArray($this->missingPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->missingPolicy) {
            if (\is_array($this->missingPolicy)) {
                $res['MissingPolicy'] = [];
                $n1 = 0;
                foreach ($this->missingPolicy as $item1) {
                    $res['MissingPolicy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
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
        if (isset($map['MissingPolicy'])) {
            if (!empty($map['MissingPolicy'])) {
                $model->missingPolicy = [];
                $n1 = 0;
                foreach ($map['MissingPolicy'] as $item1) {
                    $model->missingPolicy[$n1] = missingPolicy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
