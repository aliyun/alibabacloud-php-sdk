<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $taskFinished;

    /**
     * @var string
     */
    public $visualLossless;

    /**
     * @var string
     */
    public $optimizeFor3d;
    protected $_name = [
        'taskId'         => 'TaskId',
        'requestId'      => 'RequestId',
        'taskFinished'   => 'TaskFinished',
        'visualLossless' => 'VisualLossless',
        'optimizeFor3d'  => 'OptimizeFor3d',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskFinished) {
            $res['TaskFinished'] = $this->taskFinished;
        }
        if (null !== $this->visualLossless) {
            $res['VisualLossless'] = $this->visualLossless;
        }
        if (null !== $this->optimizeFor3d) {
            $res['OptimizeFor3d'] = $this->optimizeFor3d;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskFinished'])) {
            $model->taskFinished = $map['TaskFinished'];
        }
        if (isset($map['VisualLossless'])) {
            $model->visualLossless = $map['VisualLossless'];
        }
        if (isset($map['OptimizeFor3d'])) {
            $model->optimizeFor3d = $map['OptimizeFor3d'];
        }

        return $model;
    }
}
