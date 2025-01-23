<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data\solutionInfo;

use AlibabaCloud\Dara\Model;

class stepDetail extends Model
{
    /**
     * @var string
     */
    public $info;
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
        'info'     => 'Info',
        'status'   => 'Status',
        'stepId'   => 'StepId',
        'stepName' => 'StepName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }

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
