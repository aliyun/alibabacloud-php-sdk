<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobRequest\input;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobRequest\scheduleConfig;

class SubmitMediaCensorJobRequest extends Model
{
    /**
     * @var string
     */
    public $barrages;
    /**
     * @var string
     */
    public $coverImages;
    /**
     * @var string
     */
    public $description;
    /**
     * @var input
     */
    public $input;
    /**
     * @var string
     */
    public $notifyUrl;
    /**
     * @var string
     */
    public $output;
    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $title;
    /**
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
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
