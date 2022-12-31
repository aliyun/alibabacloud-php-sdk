<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitMediaCensorJobShrinkRequest extends Model
{
    /**
     * @example hello world
     *
     * @var string
     */
    public $barrages;

    /**
     * @example [{"Bucket":"example-bucket-****","Location":"oss-cn-shanghai","Object":"example-****.jpeg","RoleArn":"acs:ram::1997018457688683:role/AliyunICEDefaultRole"}]
     *
     * @var string
     */
    public $coverImages;

    /**
     * @example example description
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $inputShrink;

    /**
     * @example mns://125340688170****.oss-cn-shanghai.aliyuncs.com/queues/example-pipeline
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @example oss://sashimi-cn-shanghai/censor/snapshot-{Count}.jpg
     *
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $scheduleConfigShrink;

    /**
     * @example S00000001-100060
     *
     * @var string
     */
    public $templateId;

    /**
     * @example Hello World
     *
     * @var string
     */
    public $title;

    /**
     * @example UserDatatestid-001-****
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'barrages'             => 'Barrages',
        'coverImages'          => 'CoverImages',
        'description'          => 'Description',
        'inputShrink'          => 'Input',
        'notifyUrl'            => 'NotifyUrl',
        'output'               => 'Output',
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
        if (null !== $this->barrages) {
            $res['Barrages'] = $this->barrages;
        }
        if (null !== $this->coverImages) {
            $res['CoverImages'] = $this->coverImages;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
     * @return SubmitMediaCensorJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Barrages'])) {
            $model->barrages = $map['Barrages'];
        }
        if (isset($map['CoverImages'])) {
            $model->coverImages = $map['CoverImages'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
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
