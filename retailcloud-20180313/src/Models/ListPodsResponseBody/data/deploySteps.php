<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPodsResponseBody\data;

use AlibabaCloud\Tea\Model;

class deploySteps extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stepCode;

    /**
     * @var string
     */
    public $stepName;
    protected $_name = [
        'status'   => 'Status',
        'stepCode' => 'StepCode',
        'stepName' => 'StepName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stepCode) {
            $res['StepCode'] = $this->stepCode;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploySteps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StepCode'])) {
            $model->stepCode = $map['StepCode'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
