<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayConvertStatusResponseBody;

use AlibabaCloud\Tea\Model;

class convertSteps extends Model
{
    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $stepStartTime;

    /**
     * @var string
     */
    public $stepStatus;
    protected $_name = [
        'stepName'      => 'StepName',
        'stepStartTime' => 'StepStartTime',
        'stepStatus'    => 'StepStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepStartTime) {
            $res['StepStartTime'] = $this->stepStartTime;
        }
        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return convertSteps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepStartTime'])) {
            $model->stepStartTime = $map['StepStartTime'];
        }
        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }

        return $model;
    }
}
