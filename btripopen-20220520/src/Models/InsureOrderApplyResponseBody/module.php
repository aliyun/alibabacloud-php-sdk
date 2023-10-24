<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderApplyResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderApplyResponseBody\module\insOrderPolicyList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1021000196500370003
     *
     * @var string
     */
    public $insOrderId;

    /**
     * @var insOrderPolicyList[]
     */
    public $insOrderPolicyList;
    protected $_name = [
        'insOrderId'         => 'ins_order_id',
        'insOrderPolicyList' => 'ins_order_policy_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }
        if (null !== $this->insOrderPolicyList) {
            $res['ins_order_policy_list'] = [];
            if (null !== $this->insOrderPolicyList && \is_array($this->insOrderPolicyList)) {
                $n = 0;
                foreach ($this->insOrderPolicyList as $item) {
                    $res['ins_order_policy_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }
        if (isset($map['ins_order_policy_list'])) {
            if (!empty($map['ins_order_policy_list'])) {
                $model->insOrderPolicyList = [];
                $n                         = 0;
                foreach ($map['ins_order_policy_list'] as $item) {
                    $model->insOrderPolicyList[$n++] = null !== $item ? insOrderPolicyList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
