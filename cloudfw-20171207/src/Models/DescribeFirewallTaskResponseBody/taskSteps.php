<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeFirewallTaskResponseBody;

use AlibabaCloud\Dara\Model;

class taskSteps extends Model
{
    /**
     * @var string
     */
    public $stepInfo;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $stepProgress;

    /**
     * @var string
     */
    public $stepStatus;
    protected $_name = [
        'stepInfo' => 'StepInfo',
        'stepName' => 'StepName',
        'stepProgress' => 'StepProgress',
        'stepStatus' => 'StepStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stepInfo) {
            $res['StepInfo'] = $this->stepInfo;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        if (null !== $this->stepProgress) {
            $res['StepProgress'] = $this->stepProgress;
        }

        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
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
        if (isset($map['StepInfo'])) {
            $model->stepInfo = $map['StepInfo'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        if (isset($map['StepProgress'])) {
            $model->stepProgress = $map['StepProgress'];
        }

        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }

        return $model;
    }
}
