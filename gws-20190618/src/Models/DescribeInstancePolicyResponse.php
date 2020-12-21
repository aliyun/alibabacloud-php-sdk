<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancePolicyResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $visualLossless;

    /**
     * @var string
     */
    public $optimizeFor3d;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var bool
     */
    public $taskFinished;
    protected $_name = [
        'requestId'      => 'RequestId',
        'visualLossless' => 'VisualLossless',
        'optimizeFor3d'  => 'OptimizeFor3d',
        'taskId'         => 'TaskId',
        'taskFinished'   => 'TaskFinished',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('visualLossless', $this->visualLossless, true);
        Model::validateRequired('optimizeFor3d', $this->optimizeFor3d, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('taskFinished', $this->taskFinished, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->visualLossless) {
            $res['VisualLossless'] = $this->visualLossless;
        }
        if (null !== $this->optimizeFor3d) {
            $res['OptimizeFor3d'] = $this->optimizeFor3d;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancePolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VisualLossless'])) {
            $model->visualLossless = $map['VisualLossless'];
        }
        if (isset($map['OptimizeFor3d'])) {
            $model->optimizeFor3d = $map['OptimizeFor3d'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }

        return $model;
    }
}
