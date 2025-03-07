<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitSmarttagJobShrinkRequest extends Model
{
    /**
     * @description The video description. The description can contain letters, digits, and hyphens (-) and cannot start with a special character. The description can be up to 1 KB in length.
     *
     * @example example content ****
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is discontinued.
     *
     * @example http://123.com/testVideo.mp4
     *
     * @var string
     */
    public $contentAddr;

    /**
     * @description This parameter is discontinued.
     *
     * @example application/zip
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The job input.
     *
     * @var string
     */
    public $inputShrink;

    /**
     * @description The URL for receiving callbacks. Set the value to an HTTP URL or an HTTPS URL.
     *
     * @example https://example.com/endpoint/aliyun/ai?id=76401125000***
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @description The additional request parameters. The value is a JSON string. Example: {"needAsrData":true, "needOcrData":false}. The following parameters are supported:
     *
     *   needAsrData: specifies whether to query the automatic speech recognition (ASR) data. The value is of the BOOLEAN type. Default value: false. Valid values: true and false.
     *   needOcrData: specifies whether to query the optical character recognition (OCR) data. The value is of the BOOLEAN type. Default value: false. Valid values: true and false.
     *   needMetaData: specifies whether to query the metadata. The value is of the BOOLEAN type. Default value: false. Valid values: true and false.
     *   nlpParams: the input parameters of the natural language processing (NLP) operator. The value is a JSON object. This parameter is empty by default, which indicates that the NLP operator is not used. For more information, see the "nlpParams" section of this topic.
     *
     * @example {"needAsrData":true, "needOcrData":false}
     *
     * @var string
     */
    public $params;

    /**
     * @description The scheduling configurations.
     *
     * @var string
     */
    public $scheduleConfigShrink;

    /**
     * @description The ID of the template that specifies the analysis algorithms. For more information about template operations, see [Configure templates](https://help.aliyun.com/document_detail/445702.html).
     *
     * @example 39f8e0bc005e4f309379701645f4
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The video title. The title can contain letters, digits, and hyphens (-) and cannot start with a special character. The title can be up to 256 bytes in length.
     *
     * @example example-title-****
     *
     * @var string
     */
    public $title;

    /**
     * @description The data to be passed through Simple Message Queue (SMQ, formerly MNS) during callbacks. The data can be up to 1 KB in length. For more information about how to specify an SMQ queue for receiving callbacks, see UpdatePipeline.
     *
     * @example {“a”:"test"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'content'              => 'Content',
        'contentAddr'          => 'ContentAddr',
        'contentType'          => 'ContentType',
        'inputShrink'          => 'Input',
        'notifyUrl'            => 'NotifyUrl',
        'params'               => 'Params',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'templateId'           => 'TemplateId',
        'title'                => 'Title',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentAddr) {
            $res['ContentAddr'] = $this->contentAddr;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->scheduleConfigShrink) {
            $res['ScheduleConfig'] = $this->scheduleConfigShrink;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSmarttagJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentAddr'])) {
            $model->contentAddr = $map['ContentAddr'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfigShrink = $map['ScheduleConfig'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
