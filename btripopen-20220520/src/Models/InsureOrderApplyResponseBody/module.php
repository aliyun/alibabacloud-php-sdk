<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderApplyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderApplyResponseBody\module\insOrderPolicyList;

class module extends Model
{
    /**
     * @var string
     */
    public $insOrderId;

    /**
     * @var insOrderPolicyList[]
     */
    public $insOrderPolicyList;
    protected $_name = [
        'insOrderId' => 'ins_order_id',
        'insOrderPolicyList' => 'ins_order_policy_list',
    ];

    public function validate()
    {
        if (\is_array($this->insOrderPolicyList)) {
            Model::validateArray($this->insOrderPolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }

        if (null !== $this->insOrderPolicyList) {
            if (\is_array($this->insOrderPolicyList)) {
                $res['ins_order_policy_list'] = [];
                $n1 = 0;
                foreach ($this->insOrderPolicyList as $item1) {
                    $res['ins_order_policy_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }

        if (isset($map['ins_order_policy_list'])) {
            if (!empty($map['ins_order_policy_list'])) {
                $model->insOrderPolicyList = [];
                $n1 = 0;
                foreach ($map['ins_order_policy_list'] as $item1) {
                    $model->insOrderPolicyList[$n1] = insOrderPolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
