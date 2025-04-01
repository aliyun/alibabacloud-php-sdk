<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectProgressResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmLevel;

    /**
     * @var string
     */
    public $currentStep;

    /**
     * @var bool
     */
    public $enableFullTransfer;

    /**
     * @var bool
     */
    public $enableIncrSync;

    /**
     * @var bool
     */
    public $enableReverseIncrTransfer;

    /**
     * @var bool
     */
    public $enableStructTransfer;

    /**
     * @var int
     */
    public $fullTransferProgress;

    /**
     * @var int
     */
    public $incrSyncCheckpoint;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $reverseIncrTransferCheckpoint;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $structTransferProgress;
    protected $_name = [
        'alarmLevel' => 'AlarmLevel',
        'currentStep' => 'CurrentStep',
        'enableFullTransfer' => 'EnableFullTransfer',
        'enableIncrSync' => 'EnableIncrSync',
        'enableReverseIncrTransfer' => 'EnableReverseIncrTransfer',
        'enableStructTransfer' => 'EnableStructTransfer',
        'fullTransferProgress' => 'FullTransferProgress',
        'incrSyncCheckpoint' => 'IncrSyncCheckpoint',
        'projectId' => 'ProjectId',
        'reverseIncrTransferCheckpoint' => 'ReverseIncrTransferCheckpoint',
        'status' => 'Status',
        'structTransferProgress' => 'StructTransferProgress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmLevel) {
            $res['AlarmLevel'] = $this->alarmLevel;
        }

        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }

        if (null !== $this->enableFullTransfer) {
            $res['EnableFullTransfer'] = $this->enableFullTransfer;
        }

        if (null !== $this->enableIncrSync) {
            $res['EnableIncrSync'] = $this->enableIncrSync;
        }

        if (null !== $this->enableReverseIncrTransfer) {
            $res['EnableReverseIncrTransfer'] = $this->enableReverseIncrTransfer;
        }

        if (null !== $this->enableStructTransfer) {
            $res['EnableStructTransfer'] = $this->enableStructTransfer;
        }

        if (null !== $this->fullTransferProgress) {
            $res['FullTransferProgress'] = $this->fullTransferProgress;
        }

        if (null !== $this->incrSyncCheckpoint) {
            $res['IncrSyncCheckpoint'] = $this->incrSyncCheckpoint;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->reverseIncrTransferCheckpoint) {
            $res['ReverseIncrTransferCheckpoint'] = $this->reverseIncrTransferCheckpoint;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->structTransferProgress) {
            $res['StructTransferProgress'] = $this->structTransferProgress;
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
        if (isset($map['AlarmLevel'])) {
            $model->alarmLevel = $map['AlarmLevel'];
        }

        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }

        if (isset($map['EnableFullTransfer'])) {
            $model->enableFullTransfer = $map['EnableFullTransfer'];
        }

        if (isset($map['EnableIncrSync'])) {
            $model->enableIncrSync = $map['EnableIncrSync'];
        }

        if (isset($map['EnableReverseIncrTransfer'])) {
            $model->enableReverseIncrTransfer = $map['EnableReverseIncrTransfer'];
        }

        if (isset($map['EnableStructTransfer'])) {
            $model->enableStructTransfer = $map['EnableStructTransfer'];
        }

        if (isset($map['FullTransferProgress'])) {
            $model->fullTransferProgress = $map['FullTransferProgress'];
        }

        if (isset($map['IncrSyncCheckpoint'])) {
            $model->incrSyncCheckpoint = $map['IncrSyncCheckpoint'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ReverseIncrTransferCheckpoint'])) {
            $model->reverseIncrTransferCheckpoint = $map['ReverseIncrTransferCheckpoint'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StructTransferProgress'])) {
            $model->structTransferProgress = $map['StructTransferProgress'];
        }

        return $model;
    }
}
