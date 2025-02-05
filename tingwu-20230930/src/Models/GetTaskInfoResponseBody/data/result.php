<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\GetTaskInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $autoChapters;
    /**
     * @var string
     */
    public $customPrompt;
    /**
     * @var string
     */
    public $meetingAssistance;
    /**
     * @var string
     */
    public $pptExtraction;
    /**
     * @var string
     */
    public $serviceInspection;
    /**
     * @var string
     */
    public $summarization;
    /**
     * @var string
     */
    public $textPolish;
    /**
     * @var string
     */
    public $transcription;
    /**
     * @var string
     */
    public $translation;
    protected $_name = [
        'autoChapters'      => 'AutoChapters',
        'customPrompt'      => 'CustomPrompt',
        'meetingAssistance' => 'MeetingAssistance',
        'pptExtraction'     => 'PptExtraction',
        'serviceInspection' => 'ServiceInspection',
        'summarization'     => 'Summarization',
        'textPolish'        => 'TextPolish',
        'transcription'     => 'Transcription',
        'translation'       => 'Translation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoChapters) {
            $res['AutoChapters'] = $this->autoChapters;
        }

        if (null !== $this->customPrompt) {
            $res['CustomPrompt'] = $this->customPrompt;
        }

        if (null !== $this->meetingAssistance) {
            $res['MeetingAssistance'] = $this->meetingAssistance;
        }

        if (null !== $this->pptExtraction) {
            $res['PptExtraction'] = $this->pptExtraction;
        }

        if (null !== $this->serviceInspection) {
            $res['ServiceInspection'] = $this->serviceInspection;
        }

        if (null !== $this->summarization) {
            $res['Summarization'] = $this->summarization;
        }

        if (null !== $this->textPolish) {
            $res['TextPolish'] = $this->textPolish;
        }

        if (null !== $this->transcription) {
            $res['Transcription'] = $this->transcription;
        }

        if (null !== $this->translation) {
            $res['Translation'] = $this->translation;
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
        if (isset($map['AutoChapters'])) {
            $model->autoChapters = $map['AutoChapters'];
        }

        if (isset($map['CustomPrompt'])) {
            $model->customPrompt = $map['CustomPrompt'];
        }

        if (isset($map['MeetingAssistance'])) {
            $model->meetingAssistance = $map['MeetingAssistance'];
        }

        if (isset($map['PptExtraction'])) {
            $model->pptExtraction = $map['PptExtraction'];
        }

        if (isset($map['ServiceInspection'])) {
            $model->serviceInspection = $map['ServiceInspection'];
        }

        if (isset($map['Summarization'])) {
            $model->summarization = $map['Summarization'];
        }

        if (isset($map['TextPolish'])) {
            $model->textPolish = $map['TextPolish'];
        }

        if (isset($map['Transcription'])) {
            $model->transcription = $map['Transcription'];
        }

        if (isset($map['Translation'])) {
            $model->translation = $map['Translation'];
        }

        return $model;
    }
}
