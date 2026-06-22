<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetVideoAnalysisOption extends Model
{
    /**
     * @var bool
     */
    public $chapterSummary;

    /**
     * @var bool
     */
    public $keyword;

    /**
     * @var bool
     */
    public $PPT;

    /**
     * @var bool
     */
    public $question;

    /**
     * @var bool
     */
    public $summary;

    /**
     * @var bool
     */
    public $transcript;

    /**
     * @var bool
     */
    public $transcriptChapterSummary;

    /**
     * @var bool
     */
    public $transcriptSummary;
    protected $_name = [
        'chapterSummary' => 'ChapterSummary',
        'keyword' => 'Keyword',
        'PPT' => 'PPT',
        'question' => 'Question',
        'summary' => 'Summary',
        'transcript' => 'Transcript',
        'transcriptChapterSummary' => 'TranscriptChapterSummary',
        'transcriptSummary' => 'TranscriptSummary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chapterSummary) {
            $res['ChapterSummary'] = $this->chapterSummary;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->PPT) {
            $res['PPT'] = $this->PPT;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->transcript) {
            $res['Transcript'] = $this->transcript;
        }

        if (null !== $this->transcriptChapterSummary) {
            $res['TranscriptChapterSummary'] = $this->transcriptChapterSummary;
        }

        if (null !== $this->transcriptSummary) {
            $res['TranscriptSummary'] = $this->transcriptSummary;
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
        if (isset($map['ChapterSummary'])) {
            $model->chapterSummary = $map['ChapterSummary'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PPT'])) {
            $model->PPT = $map['PPT'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Transcript'])) {
            $model->transcript = $map['Transcript'];
        }

        if (isset($map['TranscriptChapterSummary'])) {
            $model->transcriptChapterSummary = $map['TranscriptChapterSummary'];
        }

        if (isset($map['TranscriptSummary'])) {
            $model->transcriptSummary = $map['TranscriptSummary'];
        }

        return $model;
    }
}
