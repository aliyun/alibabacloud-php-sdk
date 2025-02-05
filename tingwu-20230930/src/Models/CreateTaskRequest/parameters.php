<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\contentExtraction;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\customPrompt;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\extraParams;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\meetingAssistance;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\serviceInspection;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\summarization;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\transcoding;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\transcription;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\translation;

class parameters extends Model
{
    /**
     * @var bool
     */
    public $autoChaptersEnabled;
    /**
     * @var contentExtraction
     */
    public $contentExtraction;
    /**
     * @var bool
     */
    public $contentExtractionEnabled;
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
     * @var bool
     */
    public $translationEnabled;
    protected $_name = [
        'autoChaptersEnabled'      => 'AutoChaptersEnabled',
        'contentExtraction'        => 'ContentExtraction',
        'contentExtractionEnabled' => 'ContentExtractionEnabled',
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
        if (null !== $this->contentExtraction) {
            $this->contentExtraction->validate();
        }
        if (null !== $this->customPrompt) {
            $this->customPrompt->validate();
        }
        if (null !== $this->extraParams) {
            $this->extraParams->validate();
        }
        if (null !== $this->meetingAssistance) {
            $this->meetingAssistance->validate();
        }
        if (null !== $this->serviceInspection) {
            $this->serviceInspection->validate();
        }
        if (null !== $this->summarization) {
            $this->summarization->validate();
        }
        if (null !== $this->transcoding) {
            $this->transcoding->validate();
        }
        if (null !== $this->transcription) {
            $this->transcription->validate();
        }
        if (null !== $this->translation) {
            $this->translation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoChaptersEnabled) {
            $res['AutoChaptersEnabled'] = $this->autoChaptersEnabled;
        }

        if (null !== $this->contentExtraction) {
            $res['ContentExtraction'] = null !== $this->contentExtraction ? $this->contentExtraction->toArray($noStream) : $this->contentExtraction;
        }

        if (null !== $this->contentExtractionEnabled) {
            $res['ContentExtractionEnabled'] = $this->contentExtractionEnabled;
        }

        if (null !== $this->customPrompt) {
            $res['CustomPrompt'] = null !== $this->customPrompt ? $this->customPrompt->toArray($noStream) : $this->customPrompt;
        }

        if (null !== $this->customPromptEnabled) {
            $res['CustomPromptEnabled'] = $this->customPromptEnabled;
        }

        if (null !== $this->extraParams) {
            $res['ExtraParams'] = null !== $this->extraParams ? $this->extraParams->toArray($noStream) : $this->extraParams;
        }

        if (null !== $this->meetingAssistance) {
            $res['MeetingAssistance'] = null !== $this->meetingAssistance ? $this->meetingAssistance->toArray($noStream) : $this->meetingAssistance;
        }

        if (null !== $this->meetingAssistanceEnabled) {
            $res['MeetingAssistanceEnabled'] = $this->meetingAssistanceEnabled;
        }

        if (null !== $this->pptExtractionEnabled) {
            $res['PptExtractionEnabled'] = $this->pptExtractionEnabled;
        }

        if (null !== $this->serviceInspection) {
            $res['ServiceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toArray($noStream) : $this->serviceInspection;
        }

        if (null !== $this->serviceInspectionEnabled) {
            $res['ServiceInspectionEnabled'] = $this->serviceInspectionEnabled;
        }

        if (null !== $this->summarization) {
            $res['Summarization'] = null !== $this->summarization ? $this->summarization->toArray($noStream) : $this->summarization;
        }

        if (null !== $this->summarizationEnabled) {
            $res['SummarizationEnabled'] = $this->summarizationEnabled;
        }

        if (null !== $this->textPolishEnabled) {
            $res['TextPolishEnabled'] = $this->textPolishEnabled;
        }

        if (null !== $this->transcoding) {
            $res['Transcoding'] = null !== $this->transcoding ? $this->transcoding->toArray($noStream) : $this->transcoding;
        }

        if (null !== $this->transcription) {
            $res['Transcription'] = null !== $this->transcription ? $this->transcription->toArray($noStream) : $this->transcription;
        }

        if (null !== $this->translation) {
            $res['Translation'] = null !== $this->translation ? $this->translation->toArray($noStream) : $this->translation;
        }

        if (null !== $this->translationEnabled) {
            $res['TranslationEnabled'] = $this->translationEnabled;
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
        if (isset($map['AutoChaptersEnabled'])) {
            $model->autoChaptersEnabled = $map['AutoChaptersEnabled'];
        }

        if (isset($map['ContentExtraction'])) {
            $model->contentExtraction = contentExtraction::fromMap($map['ContentExtraction']);
        }

        if (isset($map['ContentExtractionEnabled'])) {
            $model->contentExtractionEnabled = $map['ContentExtractionEnabled'];
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
