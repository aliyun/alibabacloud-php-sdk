<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetEffectivePolicyResponseBody\policyAttachments;

class GetEffectivePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $effectivePolicy;
    /**
     * @var policyAttachments[]
     */
    public $policyAttachments;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'effectivePolicy'   => 'EffectivePolicy',
        'policyAttachments' => 'PolicyAttachments',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->policyAttachments)) {
            Model::validateArray($this->policyAttachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectivePolicy) {
            $res['EffectivePolicy'] = $this->effectivePolicy;
        }

        if (null !== $this->policyAttachments) {
            if (\is_array($this->policyAttachments)) {
                $res['PolicyAttachments'] = [];
                $n1                       = 0;
                foreach ($this->policyAttachments as $item1) {
                    $res['PolicyAttachments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EffectivePolicy'])) {
            $model->effectivePolicy = $map['EffectivePolicy'];
        }

        if (isset($map['PolicyAttachments'])) {
            if (!empty($map['PolicyAttachments'])) {
                $model->policyAttachments = [];
                $n1                       = 0;
                foreach ($map['PolicyAttachments'] as $item1) {
                    $model->policyAttachments[$n1++] = policyAttachments::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
