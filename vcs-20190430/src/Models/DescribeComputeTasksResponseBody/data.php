<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeComputeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var int
     */
    public $deviceNum;

    /**
     * @var float
     */
    public $imageSize;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var float
     */
    public $structuredSize;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var float
     */
    public $vectorSize;
    protected $_name = [
        'algorithmName'  => 'AlgorithmName',
        'deviceNum'      => 'DeviceNum',
        'imageSize'      => 'ImageSize',
        'runtime'        => 'Runtime',
        'structuredSize' => 'StructuredSize',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
        'taskStatus'     => 'TaskStatus',
        'vectorSize'     => 'VectorSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->deviceNum) {
            $res['DeviceNum'] = $this->deviceNum;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }
        if (null !== $this->structuredSize) {
            $res['StructuredSize'] = $this->structuredSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->vectorSize) {
            $res['VectorSize'] = $this->vectorSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['DeviceNum'])) {
            $model->deviceNum = $map['DeviceNum'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }
        if (isset($map['StructuredSize'])) {
            $model->structuredSize = $map['StructuredSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['VectorSize'])) {
            $model->vectorSize = $map['VectorSize'];
        }

        return $model;
    }
}
