<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;

class UpdateExperimentPlanRequest extends Model
{
    /**
     * @var int
     */
    public $planId;

    /**
     * @var string
     */
    public $planTemplateName;
    protected $_name = [
        'planId' => 'PlanId',
        'planTemplateName' => 'PlanTemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->planTemplateName) {
            $res['PlanTemplateName'] = $this->planTemplateName;
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
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['PlanTemplateName'])) {
            $model->planTemplateName = $map['PlanTemplateName'];
        }

        return $model;
    }
}
