<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class CreatePolicyBindingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $policyBindingListShrink;

    /**
     * @var string
     */
    public $policyId;
    protected $_name = [
        'policyBindingListShrink' => 'PolicyBindingList',
        'policyId' => 'PolicyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyBindingListShrink) {
            $res['PolicyBindingList'] = $this->policyBindingListShrink;
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
            $model->policyBindingListShrink = $map['PolicyBindingList'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
