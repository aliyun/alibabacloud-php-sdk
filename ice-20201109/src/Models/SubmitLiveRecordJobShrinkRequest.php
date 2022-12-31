<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitLiveRecordJobShrinkRequest extends Model
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
     * @var string
     */
    public $recordOutputShrink;

    /**
     * @var string
     */
    public $streamInputShrink;

    /**
     * @description 录制模板ID
     *
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
