<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\GetEffectivePolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\GetEffectivePolicyResponseBody\policyAttachments\policyList;

class policyAttachments extends Model
{
    /**
     * @var policyList[]
     */
    public $policyList;
    /**
     * @var string
     */
    public $policyType;
    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'policyList' => 'PolicyList',
        'policyType' => 'PolicyType',
        'tagKey'     => 'TagKey',
    ];

    public function validate()
    {
        if (\is_array($this->policyList)) {
            Model::validateArray($this->policyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyList) {
            if (\is_array($this->policyList)) {
                $res['PolicyList'] = [];
                $n1                = 0;
                foreach ($this->policyList as $item1) {
                    $res['PolicyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
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
        if (isset($map['PolicyList'])) {
            if (!empty($map['PolicyList'])) {
                $model->policyList = [];
                $n1                = 0;
                foreach ($map['PolicyList'] as $item1) {
                    $model->policyList[$n1++] = policyList::fromMap($item1);
                }
            }
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
