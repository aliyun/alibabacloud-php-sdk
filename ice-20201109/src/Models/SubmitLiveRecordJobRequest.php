<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobRequest\recordOutput;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobRequest\streamInput;
use AlibabaCloud\Tea\Model;

class SubmitLiveRecordJobRequest extends Model
{
    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example live stream record 1
     *
     * @var string
     */
    public $name;

    /**
     * @description 回调地址
     *
     * @example https://example.com/imsnotify
     *
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
     * @description 录制模板ID
     *
     * @example 69e1f9fe-1e97-11ed-ba64-0c42a1b73d66
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->recordOutput) {
            $res['RecordOutput'] = null !== $this->recordOutput ? $this->recordOutput->toMap() : null;
        }
        if (null !== $this->streamInput) {
            $res['StreamInput'] = null !== $this->streamInput ? $this->streamInput->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitLiveRecordJobRequest
     */
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
