<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ExecDataCheckSaveTaskRequest extends Model
{
    /**
     * @var string
     */
    public $checkGlobalParams;

    /**
     * @var int
     */
    public $fullTableCount;

    /**
     * @var string
     */
    public $sourceGlobalParams;

    /**
     * @var int
     */
    public $startImmediately;

    /**
     * @var string
     */
    public $targetGlobalParams;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var float
     */
    public $totalCountThreshold;
    protected $_name = [
        'checkGlobalParams' => 'checkGlobalParams',
        'fullTableCount' => 'fullTableCount',
        'sourceGlobalParams' => 'sourceGlobalParams',
        'startImmediately' => 'startImmediately',
        'targetGlobalParams' => 'targetGlobalParams',
        'taskId' => 'taskId',
        'totalCountThreshold' => 'totalCountThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkGlobalParams) {
            $res['checkGlobalParams'] = $this->checkGlobalParams;
        }

        if (null !== $this->fullTableCount) {
            $res['fullTableCount'] = $this->fullTableCount;
        }

        if (null !== $this->sourceGlobalParams) {
            $res['sourceGlobalParams'] = $this->sourceGlobalParams;
        }

        if (null !== $this->startImmediately) {
            $res['startImmediately'] = $this->startImmediately;
        }

        if (null !== $this->targetGlobalParams) {
            $res['targetGlobalParams'] = $this->targetGlobalParams;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->totalCountThreshold) {
            $res['totalCountThreshold'] = $this->totalCountThreshold;
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
        if (isset($map['checkGlobalParams'])) {
            $model->checkGlobalParams = $map['checkGlobalParams'];
        }

        if (isset($map['fullTableCount'])) {
            $model->fullTableCount = $map['fullTableCount'];
        }

        if (isset($map['sourceGlobalParams'])) {
            $model->sourceGlobalParams = $map['sourceGlobalParams'];
        }

        if (isset($map['startImmediately'])) {
            $model->startImmediately = $map['startImmediately'];
        }

        if (isset($map['targetGlobalParams'])) {
            $model->targetGlobalParams = $map['targetGlobalParams'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['totalCountThreshold'])) {
            $model->totalCountThreshold = $map['totalCountThreshold'];
        }

        return $model;
    }
}
