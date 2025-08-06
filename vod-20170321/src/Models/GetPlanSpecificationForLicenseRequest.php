<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetPlanSpecificationForLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $fromApp;

    /**
     * @var bool
     */
    public $needItemSpecification;

    /**
     * @var string
     */
    public $planCode;

    /**
     * @var string
     */
    public $planId;
    protected $_name = [
        'fromApp' => 'FromApp',
        'needItemSpecification' => 'NeedItemSpecification',
        'planCode' => 'PlanCode',
        'planId' => 'PlanId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
        }

        if (null !== $this->needItemSpecification) {
            $res['NeedItemSpecification'] = $this->needItemSpecification;
        }

        if (null !== $this->planCode) {
            $res['PlanCode'] = $this->planCode;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
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
        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
        }

        if (isset($map['NeedItemSpecification'])) {
            $model->needItemSpecification = $map['NeedItemSpecification'];
        }

        if (isset($map['PlanCode'])) {
            $model->planCode = $map['PlanCode'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        return $model;
    }
}
