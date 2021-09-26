<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data\solutionInfo;

use AlibabaCloud\Tea\Model;

class stepDetail extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $stepId;

    /**
     * @var string
     */
    public $stepName;
    protected $_name = [
        'status'   => 'Status',
        'stepId'   => 'StepId',
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
        if (null !== $this->stepId) {
            $res['StepId'] = $this->stepId;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StepId'])) {
            $model->stepId = $map['StepId'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
