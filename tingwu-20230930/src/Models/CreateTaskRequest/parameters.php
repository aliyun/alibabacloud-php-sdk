<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest;

use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\customPrompt;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\extraParams;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\meetingAssistance;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\serviceInspection;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\summarization;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\transcoding;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\transcription;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\translation;
use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoChaptersEnabled;

    /**
     * @var customPrompt
     */
    public $customPrompt;

    /**
     * @var bool
     */
    public $customPromptEnabled;

    /**
     * @var extraParams
     */
    public $extraParams;

    /**
     * @var meetingAssistance
     */
    public $meetingAssistance;

    /**
     * @example false
     *
     * @var bool
     */
    public $meetingAssistanceEnabled;

    /**
     * @var bool
     */
    public $pptExtractionEnabled;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @var bool
     */
    public $serviceInspectionEnabled;

    /**
     * @var summarization
     */
    public $summarization;

    /**
     * @example false
     *
     * @var bool
     */
    public $summarizationEnabled;

    /**
     * @var bool
     */
    public $textPolishEnabled;

    /**
     * @var transcoding
     */
    public $transcoding;

    /**
     * @var transcription
     */
    public $transcription;

    /**
     * @var translation
     */
    public $translation;

    /**
     * @example false
     *
     * @var bool
     */
    public $translationEnabled;
    protected $_name = [
        'autoChaptersEnabled'      => 'AutoChaptersEnabled',
        'customPrompt'             => 'CustomPrompt',
        'customPromptEnabled'      => 'CustomPromptEnabled',
        'extraParams'              => 'ExtraParams',
        'meetingAssistance'        => 'MeetingAssistance',
        'meetingAssistanceEnabled' => 'MeetingAssistanceEnabled',
        'pptExtractionEnabled'     => 'PptExtractionEnabled',
        'serviceInspection'        => 'ServiceInspection',
        'serviceInspectionEnabled' => 'ServiceInspectionEnabled',
        'summarization'            => 'Summarization',
        'summarizationEnabled'     => 'SummarizationEnabled',
        'textPolishEnabled'        => 'TextPolishEnabled',
        'transcoding'              => 'Transcoding',
        'transcription'            => 'Transcription',
        'translation'              => 'Translation',
        'translationEnabled'       => 'TranslationEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoChaptersEnabled) {
            $res['AutoChaptersEnabled'] = $this->autoChaptersEnabled;
        }
        if (null !== $this->customPrompt) {
            $res['CustomPrompt'] = null !== $this->customPrompt ? $this->customPrompt->toMap() : null;
        }
        if (null !== $this->customPromptEnabled) {
            $res['CustomPromptEnabled'] = $this->customPromptEnabled;
        }
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = null !== $this->extraParams ? $this->extraParams->toMap() : null;
        }
        if (null !== $this->meetingAssistance) {
            $res['MeetingAssistance'] = null !== $this->meetingAssistance ? $this->meetingAssistance->toMap() : null;
        }
        if (null !== $this->meetingAssistanceEnabled) {
            $res['MeetingAssistanceEnabled'] = $this->meetingAssistanceEnabled;
        }
        if (null !== $this->pptExtractionEnabled) {
            $res['PptExtractionEnabled'] = $this->pptExtractionEnabled;
        }
        if (null !== $this->serviceInspection) {
            $res['ServiceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toMap() : null;
        }
        if (null !== $this->serviceInspectionEnabled) {
            $res['ServiceInspectionEnabled'] = $this->serviceInspectionEnabled;
        }
        if (null !== $this->summarization) {
            $res['Summarization'] = null !== $this->summarization ? $this->summarization->toMap() : null;
        }
        if (null !== $this->summarizationEnabled) {
            $res['SummarizationEnabled'] = $this->summarizationEnabled;
        }
        if (null !== $this->textPolishEnabled) {
            $res['TextPolishEnabled'] = $this->textPolishEnabled;
        }
        if (null !== $this->transcoding) {
            $res['Transcoding'] = null !== $this->transcoding ? $this->transcoding->toMap() : null;
        }
        if (null !== $this->transcription) {
            $res['Transcription'] = null !== $this->transcription ? $this->transcription->toMap() : null;
        }
        if (null !== $this->translation) {
            $res['Translation'] = null !== $this->translation ? $this->translation->toMap() : null;
        }
        if (null !== $this->translationEnabled) {
            $res['TranslationEnabled'] = $this->translationEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoChaptersEnabled'])) {
            $model->autoChaptersEnabled = $map['AutoChaptersEnabled'];
        }
        if (isset($map['CustomPrompt'])) {
            $model->customPrompt = customPrompt::fromMap($map['CustomPrompt']);
        }
        if (isset($map['CustomPromptEnabled'])) {
            $model->customPromptEnabled = $map['CustomPromptEnabled'];
        }
        if (isset($map['ExtraParams'])) {
            $model->extraParams = extraParams::fromMap($map['ExtraParams']);
        }
        if (isset($map['MeetingAssistance'])) {
            $model->meetingAssistance = meetingAssistance::fromMap($map['MeetingAssistance']);
        }
        if (isset($map['MeetingAssistanceEnabled'])) {
            $model->meetingAssistanceEnabled = $map['MeetingAssistanceEnabled'];
        }
        if (isset($map['PptExtractionEnabled'])) {
            $model->pptExtractionEnabled = $map['PptExtractionEnabled'];
        }
        if (isset($map['ServiceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['ServiceInspection']);
        }
        if (isset($map['ServiceInspectionEnabled'])) {
            $model->serviceInspectionEnabled = $map['ServiceInspectionEnabled'];
        }
        if (isset($map['Summarization'])) {
            $model->summarization = summarization::fromMap($map['Summarization']);
        }
        if (isset($map['SummarizationEnabled'])) {
            $model->summarizationEnabled = $map['SummarizationEnabled'];
        }
        if (isset($map['TextPolishEnabled'])) {
            $model->textPolishEnabled = $map['TextPolishEnabled'];
        }
        if (isset($map['Transcoding'])) {
            $model->transcoding = transcoding::fromMap($map['Transcoding']);
        }
        if (isset($map['Transcription'])) {
            $model->transcription = transcription::fromMap($map['Transcription']);
        }
        if (isset($map['Translation'])) {
            $model->translation = translation::fromMap($map['Translation']);
        }
        if (isset($map['TranslationEnabled'])) {
            $model->translationEnabled = $map['TranslationEnabled'];
        }

        return $model;
    }
}
