<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobRequest\scheduleConfig;
use AlibabaCloud\Tea\Model;

class SubmitMediaCensorJobRequest extends Model
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
     * @var input
     */
    public $input;

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
     * @var scheduleConfig
     */
    public $scheduleConfig;

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
        'barrages'       => 'Barrages',
        'coverImages'    => 'CoverImages',
        'description'    => 'Description',
        'input'          => 'Input',
        'notifyUrl'      => 'NotifyUrl',
        'output'         => 'Output',
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
        if (null !== $this->barrages) {
            $res['Barrages'] = $this->barrages;
        }
        if (null !== $this->coverImages) {
            $res['CoverImages'] = $this->coverImages;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
     * @return SubmitMediaCensorJobRequest
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
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
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
