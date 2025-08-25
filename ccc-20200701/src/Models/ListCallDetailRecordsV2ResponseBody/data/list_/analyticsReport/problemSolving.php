<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_\analyticsReport;

use AlibabaCloud\Dara\Model;

class problemSolving extends Model
{
    /**
     * @var string
     */
    public $problem;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var bool
     */
    public $solved;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'problem' => 'Problem',
        'solution' => 'Solution',
        'solved' => 'Solved',
        'success' => 'Success',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->problem) {
            $res['Problem'] = $this->problem;
        }

        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }

        if (null !== $this->solved) {
            $res['Solved'] = $this->solved;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Problem'])) {
            $model->problem = $map['Problem'];
        }

        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        if (isset($map['Solved'])) {
            $model->solved = $map['Solved'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
