<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeWorkflowActivityResponseBody;

use AlibabaCloud\Tea\Model;

class activityInfo extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtEnd;

    /**
     * @var string
     */
    public $gmtStart;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $workerNode;
    protected $_name = [
        'activityId'   => 'ActivityId',
        'activityName' => 'ActivityName',
        'duration'     => 'Duration',
        'error'        => 'Error',
        'gmtCreate'    => 'GmtCreate',
        'gmtEnd'       => 'GmtEnd',
        'gmtStart'     => 'GmtStart',
        'input'        => 'Input',
        'method'       => 'Method',
        'output'       => 'Output',
        'state'        => 'State',
        'workerNode'   => 'WorkerNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtEnd) {
            $res['GmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtStart) {
            $res['GmtStart'] = $this->gmtStart;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->workerNode) {
            $res['WorkerNode'] = $this->workerNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtEnd'])) {
            $model->gmtEnd = $map['GmtEnd'];
        }
        if (isset($map['GmtStart'])) {
            $model->gmtStart = $map['GmtStart'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['WorkerNode'])) {
            $model->workerNode = $map['WorkerNode'];
        }

        return $model;
    }
}
