<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyAIDBClusterModelResponseBody extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $targetModelName;

    /**
     * @var string
     */
    public $targetOssPath;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalBatches;

    /**
     * @var int
     */
    public $totalMsds;

    /**
     * @var string[]
     */
    public $warnings;
    protected $_name = [
        'dryRun' => 'DryRun',
        'modelType' => 'ModelType',
        'requestId' => 'RequestId',
        'targetModelName' => 'TargetModelName',
        'targetOssPath' => 'TargetOssPath',
        'taskId' => 'TaskId',
        'totalBatches' => 'TotalBatches',
        'totalMsds' => 'TotalMsds',
        'warnings' => 'Warnings',
    ];

    public function validate()
    {
        if (\is_array($this->warnings)) {
            Model::validateArray($this->warnings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->targetModelName) {
            $res['TargetModelName'] = $this->targetModelName;
        }

        if (null !== $this->targetOssPath) {
            $res['TargetOssPath'] = $this->targetOssPath;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->totalBatches) {
            $res['TotalBatches'] = $this->totalBatches;
        }

        if (null !== $this->totalMsds) {
            $res['TotalMsds'] = $this->totalMsds;
        }

        if (null !== $this->warnings) {
            if (\is_array($this->warnings)) {
                $res['Warnings'] = [];
                $n1 = 0;
                foreach ($this->warnings as $item1) {
                    $res['Warnings'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TargetModelName'])) {
            $model->targetModelName = $map['TargetModelName'];
        }

        if (isset($map['TargetOssPath'])) {
            $model->targetOssPath = $map['TargetOssPath'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TotalBatches'])) {
            $model->totalBatches = $map['TotalBatches'];
        }

        if (isset($map['TotalMsds'])) {
            $model->totalMsds = $map['TotalMsds'];
        }

        if (isset($map['Warnings'])) {
            if (!empty($map['Warnings'])) {
                $model->warnings = [];
                $n1 = 0;
                foreach ($map['Warnings'] as $item1) {
                    $model->warnings[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
