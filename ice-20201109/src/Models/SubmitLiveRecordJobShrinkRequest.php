<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitLiveRecordJobShrinkRequest extends Model
{
    /**
     * @description The name of the recording job.
     *
     * This parameter is required.
     * @example live stream record 1
     *
     * @var string
     */
    public $name;

    /**
     * @description The callback URL.
     *
     * @example https://example.com/imsnotify
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The storage address of the recording.
     *
     * This parameter is required.
     * @var string
     */
    public $recordOutputShrink;

    /**
     * @description The URL of the live stream.
     *
     * This parameter is required.
     * @var string
     */
    public $streamInputShrink;

    /**
     * @description The ID of the recording template.
     *
     * This parameter is required.
     * @example 69e1f9fe-1e97-11ed-ba64-0c42a1b73d66
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'               => 'Name',
        'notifyUrl'          => 'NotifyUrl',
        'recordOutputShrink' => 'RecordOutput',
        'streamInputShrink'  => 'StreamInput',
        'templateId'         => 'TemplateId',
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
        if (null !== $this->recordOutputShrink) {
            $res['RecordOutput'] = $this->recordOutputShrink;
        }
        if (null !== $this->streamInputShrink) {
            $res['StreamInput'] = $this->streamInputShrink;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitLiveRecordJobShrinkRequest
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
            $model->recordOutputShrink = $map['RecordOutput'];
        }
        if (isset($map['StreamInput'])) {
            $model->streamInputShrink = $map['StreamInput'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
