<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList;
use AlibabaCloud\Tea\Model;

class CreatePolicyBindingsRequest extends Model
{
    /**
     * @description The data sources that you want to bind to the backup policy.
     *
     * @var policyBindingList[]
     */
    public $policyBindingList;

    /**
     * @description The ID of the backup policy.
     *
     * @example po-000************8ep
     *
     * @var string
     */
    public $policyId;
    protected $_name = [
        'policyBindingList' => 'PolicyBindingList',
        'policyId'          => 'PolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyBindingList) {
            $res['PolicyBindingList'] = [];
            if (null !== $this->policyBindingList && \is_array($this->policyBindingList)) {
                $n = 0;
                foreach ($this->policyBindingList as $item) {
                    $res['PolicyBindingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyBindingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyBindingList'])) {
            if (!empty($map['PolicyBindingList'])) {
                $model->policyBindingList = [];
                $n                        = 0;
                foreach ($map['PolicyBindingList'] as $item) {
                    $model->policyBindingList[$n++] = null !== $item ? policyBindingList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
