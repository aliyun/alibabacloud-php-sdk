<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobRequest\recordOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobRequest\streamInput;

class SubmitLiveRecordJobRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $notifyUrl;
    /**
     * @var recordOutput
     */
    public $recordOutput;
    /**
     * @var streamInput
     */
    public $streamInput;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'         => 'Name',
        'notifyUrl'    => 'NotifyUrl',
        'recordOutput' => 'RecordOutput',
        'streamInput'  => 'StreamInput',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
        if (null !== $this->recordOutput) {
            $this->recordOutput->validate();
        }
        if (null !== $this->streamInput) {
            $this->streamInput->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }

        if (null !== $this->recordOutput) {
            $res['RecordOutput'] = null !== $this->recordOutput ? $this->recordOutput->toArray($noStream) : $this->recordOutput;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }

        if (isset($map['RecordOutput'])) {
            $model->recordOutput = recordOutput::fromMap($map['RecordOutput']);
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
