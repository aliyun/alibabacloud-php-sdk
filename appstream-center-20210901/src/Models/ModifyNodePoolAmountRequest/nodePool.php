<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountRequest;

use AlibabaCloud\Tea\Model;

class nodePool extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @example EXPAND_FROM_POST_PAID_EXPLICIT
     *
     * @var string
     */
    public $prePaidNodeAmountModifyMode;

    /**
     * @var string[]
     */
    public $prePaidNodeAmountModifyNodeIds;
    protected $_name = [
        'nodeAmount'                     => 'NodeAmount',
        'prePaidNodeAmountModifyMode'    => 'PrePaidNodeAmountModifyMode',
        'prePaidNodeAmountModifyNodeIds' => 'PrePaidNodeAmountModifyNodeIds',
    ];

    public function validate()
    {
    }

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
