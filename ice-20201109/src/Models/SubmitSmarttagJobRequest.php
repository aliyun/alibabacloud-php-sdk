<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobRequest\scheduleConfig;
use AlibabaCloud\Tea\Model;

class SubmitSmarttagJobRequest extends Model
{
    /**
     * @example example content ****
     *
     * @var string
     */
    public $content;

    /**
     * @example http://123.com/testVideo.mp4
     *
     * @var string
     */
    public $contentAddr;

    /**
     * @example application/zip
     *
     * @var string
     */
    public $contentType;

    /**
     * @description input
     *
     * @var input
     */
    public $input;

    /**
     * @example https://example.com/endpoint/aliyun/ai?id=76401125000***
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @example {"needAsrData":true, "needOcrData":false}
     *
     * @var string
     */
    public $params;

    /**
     * @description scheduleConfig
     *
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @example 39f8e0bc005e4f309379701645f4
     *
     * @var string
     */
    public $templateId;

    /**
     * @example example-title-****
     *
     * @var string
     */
    public $title;

    /**
     * @example {“a”:"test"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'content'        => 'Content',
        'contentAddr'    => 'ContentAddr',
        'contentType'    => 'ContentType',
        'input'          => 'Input',
        'notifyUrl'      => 'NotifyUrl',
        'params'         => 'Params',
        'scheduleConfig' => 'ScheduleConfig',
        'templateId'     => 'TemplateId',
        'title'          => 'Title',
        'userData'       => 'UserData',
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
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toMap() : null;
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
     * @return SubmitSmarttagJobRequest
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
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
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
