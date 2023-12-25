<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\GetTaskInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $autoChapters;

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
    public $summarization;

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
        'meetingAssistance' => 'MeetingAssistance',
        'pptExtraction'     => 'PptExtraction',
        'summarization'     => 'Summarization',
        'transcription'     => 'Transcription',
        'translation'       => 'Translation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoChapters) {
            $res['AutoChapters'] = $this->autoChapters;
        }
        if (null !== $this->meetingAssistance) {
            $res['MeetingAssistance'] = $this->meetingAssistance;
        }
        if (null !== $this->pptExtraction) {
            $res['PptExtraction'] = $this->pptExtraction;
        }
        if (null !== $this->summarization) {
            $res['Summarization'] = $this->summarization;
        }
        if (null !== $this->transcription) {
            $res['Transcription'] = $this->transcription;
        }
        if (null !== $this->translation) {
            $res['Translation'] = $this->translation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoChapters'])) {
            $model->autoChapters = $map['AutoChapters'];
        }
        if (isset($map['MeetingAssistance'])) {
            $model->meetingAssistance = $map['MeetingAssistance'];
        }
        if (isset($map['PptExtraction'])) {
            $model->pptExtraction = $map['PptExtraction'];
        }
        if (isset($map['Summarization'])) {
            $model->summarization = $map['Summarization'];
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
