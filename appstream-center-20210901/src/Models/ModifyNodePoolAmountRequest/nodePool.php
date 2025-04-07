<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountRequest;

use AlibabaCloud\Tea\Model;

class nodePool extends Model
{
    /**
     * @description The total number of subscription nodes after the change.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @description The change mode of subscription nodes.
     *
     * Valid value:
     *
     *   EXPAND_FROM_POST_PAID_EXPLICIT: changes from specified pay-as-you-go nodes
     *
     * @example EXPAND_FROM_POST_PAID_EXPLICIT
     *
     * @var string
     */
    public $prePaidNodeAmountModifyMode;

    /**
     * @description The nodes for which you want to change the billing method.
     *
     * @var string[]
     */
    public $prePaidNodeAmountModifyNodeIds;
    protected $_name = [
        'nodeAmount' => 'NodeAmount',
        'prePaidNodeAmountModifyMode' => 'PrePaidNodeAmountModifyMode',
        'prePaidNodeAmountModifyNodeIds' => 'PrePaidNodeAmountModifyNodeIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeAmount) {
            $res['NodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->prePaidNodeAmountModifyMode) {
            $res['PrePaidNodeAmountModifyMode'] = $this->prePaidNodeAmountModifyMode;
        }
        if (null !== $this->prePaidNodeAmountModifyNodeIds) {
            $res['PrePaidNodeAmountModifyNodeIds'] = $this->prePaidNodeAmountModifyNodeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodePool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeAmount'])) {
            $model->nodeAmount = $map['NodeAmount'];
        }
        if (isset($map['PrePaidNodeAmountModifyMode'])) {
            $model->prePaidNodeAmountModifyMode = $map['PrePaidNodeAmountModifyMode'];
        }
        if (isset($map['PrePaidNodeAmountModifyNodeIds'])) {
            if (!empty($map['PrePaidNodeAmountModifyNodeIds'])) {
                $model->prePaidNodeAmountModifyNodeIds = $map['PrePaidNodeAmountModifyNodeIds'];
            }
        }

        return $model;
    }
}
