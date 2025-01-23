<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList;

class CreatePolicyBindingsRequest extends Model
{
    /**
     * @var policyBindingList[]
     */
    public $policyBindingList;
    /**
     * @var string
     */
    public $policyId;
    protected $_name = [
        'policyBindingList' => 'PolicyBindingList',
        'policyId'          => 'PolicyId',
    ];

    public function validate()
    {
        if (\is_array($this->policyBindingList)) {
            Model::validateArray($this->policyBindingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyBindingList) {
            if (\is_array($this->policyBindingList)) {
                $res['PolicyBindingList'] = [];
                $n1                       = 0;
                foreach ($this->policyBindingList as $item1) {
                    $res['PolicyBindingList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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
        if (isset($map['PolicyBindingList'])) {
            if (!empty($map['PolicyBindingList'])) {
                $model->policyBindingList = [];
                $n1                       = 0;
                foreach ($map['PolicyBindingList'] as $item1) {
                    $model->policyBindingList[$n1++] = policyBindingList::fromMap($item1);
                }
            }
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
