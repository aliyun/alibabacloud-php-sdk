<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAutoRepairPolicyResponseBody\rules\repairProcedure;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAutoRepairPolicyResponseBody\rules\repairProcedure\intervention\approvedLabel;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAutoRepairPolicyResponseBody\rules\repairProcedure\intervention\inquiringLabel;

class intervention extends Model
{
    /**
     * @var approvedLabel
     */
    public $approvedLabel;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var inquiringLabel
     */
    public $inquiringLabel;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'approvedLabel' => 'approved_label',
        'enable' => 'enable',
        'inquiringLabel' => 'inquiring_label',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->approvedLabel) {
            $this->approvedLabel->validate();
        }
        if (null !== $this->inquiringLabel) {
            $this->inquiringLabel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvedLabel) {
            $res['approved_label'] = null !== $this->approvedLabel ? $this->approvedLabel->toArray($noStream) : $this->approvedLabel;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->inquiringLabel) {
            $res['inquiring_label'] = null !== $this->inquiringLabel ? $this->inquiringLabel->toArray($noStream) : $this->inquiringLabel;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['approved_label'])) {
            $model->approvedLabel = approvedLabel::fromMap($map['approved_label']);
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['inquiring_label'])) {
            $model->inquiringLabel = inquiringLabel::fromMap($map['inquiring_label']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
