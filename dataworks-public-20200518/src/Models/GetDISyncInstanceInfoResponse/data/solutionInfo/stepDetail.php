<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponse\data\solutionInfo;

use AlibabaCloud\Tea\Model;

class stepDetail extends Model
{
    /**
     * @var string
     */
    public $stepName;

    /**
     * @var int
     */
    public $stepId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'stepName' => 'StepName',
        'stepId'   => 'StepId',
        'status'   => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('stepName', $this->stepName, true);
        Model::validateRequired('stepId', $this->stepId, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepId) {
            $res['StepId'] = $this->stepId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepId'])) {
            $model->stepId = $map['StepId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
