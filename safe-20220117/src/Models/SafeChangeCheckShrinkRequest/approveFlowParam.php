<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckShrinkRequest\approveFlowParam\approveNodes;

class approveFlowParam extends Model
{
    /**
     * @var approveNodes[]
     */
    public $approveNodes;

    /**
     * @var int
     */
    public $flowStatus;
    protected $_name = [
        'approveNodes' => 'ApproveNodes',
        'flowStatus' => 'FlowStatus',
    ];

    public function validate()
    {
        if (\is_array($this->approveNodes)) {
            Model::validateArray($this->approveNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveNodes) {
            if (\is_array($this->approveNodes)) {
                $res['ApproveNodes'] = [];
                $n1 = 0;
                foreach ($this->approveNodes as $item1) {
                    $res['ApproveNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
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
        if (isset($map['ApproveNodes'])) {
            if (!empty($map['ApproveNodes'])) {
                $model->approveNodes = [];
                $n1 = 0;
                foreach ($map['ApproveNodes'] as $item1) {
                    $model->approveNodes[$n1] = approveNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }

        return $model;
    }
}
