<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobRequest\snapshotOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobRequest\streamInput;

class SubmitLiveSnapshotJobRequest extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var snapshotOutput
     */
    public $snapshotOutput;
    /**
     * @var streamInput
     */
    public $streamInput;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'callbackUrl'    => 'CallbackUrl',
        'jobName'        => 'JobName',
        'snapshotOutput' => 'SnapshotOutput',
        'streamInput'    => 'StreamInput',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
        if (null !== $this->snapshotOutput) {
            $this->snapshotOutput->validate();
        }
        if (null !== $this->streamInput) {
            $this->streamInput->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->snapshotOutput) {
            $res['SnapshotOutput'] = null !== $this->snapshotOutput ? $this->snapshotOutput->toArray($noStream) : $this->snapshotOutput;
        }

        if (null !== $this->streamInput) {
            $res['StreamInput'] = null !== $this->streamInput ? $this->streamInput->toArray($noStream) : $this->streamInput;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['SnapshotOutput'])) {
            $model->snapshotOutput = snapshotOutput::fromMap($map['SnapshotOutput']);
        }

        if (isset($map['StreamInput'])) {
            $model->streamInput = streamInput::fromMap($map['StreamInput']);
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
