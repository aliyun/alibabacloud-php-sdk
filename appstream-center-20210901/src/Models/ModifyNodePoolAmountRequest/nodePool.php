<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAmountRequest;

use AlibabaCloud\Dara\Model;

class nodePool extends Model
{
    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var string
     */
    public $prePaidNodeAmountModifyMode;

    /**
     * @var string[]
     */
    public $prePaidNodeAmountModifyNodeIds;
    protected $_name = [
        'nodeAmount' => 'NodeAmount',
        'prePaidNodeAmountModifyMode' => 'PrePaidNodeAmountModifyMode',
        'prePaidNodeAmountModifyNodeIds' => 'PrePaidNodeAmountModifyNodeIds',
    ];

    public function validate()
    {
        if (\is_array($this->prePaidNodeAmountModifyNodeIds)) {
            Model::validateArray($this->prePaidNodeAmountModifyNodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeAmount) {
            $res['NodeAmount'] = $this->nodeAmount;
        }

        if (null !== $this->prePaidNodeAmountModifyMode) {
            $res['PrePaidNodeAmountModifyMode'] = $this->prePaidNodeAmountModifyMode;
        }

        if (null !== $this->prePaidNodeAmountModifyNodeIds) {
            if (\is_array($this->prePaidNodeAmountModifyNodeIds)) {
                $res['PrePaidNodeAmountModifyNodeIds'] = [];
                $n1 = 0;
                foreach ($this->prePaidNodeAmountModifyNodeIds as $item1) {
                    $res['PrePaidNodeAmountModifyNodeIds'][$n1] = $item1;
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
        if (isset($map['NodeAmount'])) {
            $model->nodeAmount = $map['NodeAmount'];
        }

        if (isset($map['PrePaidNodeAmountModifyMode'])) {
            $model->prePaidNodeAmountModifyMode = $map['PrePaidNodeAmountModifyMode'];
        }

        if (isset($map['PrePaidNodeAmountModifyNodeIds'])) {
            if (!empty($map['PrePaidNodeAmountModifyNodeIds'])) {
                $model->prePaidNodeAmountModifyNodeIds = [];
                $n1 = 0;
                foreach ($map['PrePaidNodeAmountModifyNodeIds'] as $item1) {
                    $model->prePaidNodeAmountModifyNodeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
