<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetDocumentAnalysisOption extends Model
{
    /**
     * @var bool
     */
    public $chapterSummary;

    /**
     * @var DocumentChapterSummarizeOption
     */
    public $chapterSummaryOption;

    /**
     * @var bool
     */
    public $images;

    /**
     * @var bool
     */
    public $keyword;

    /**
     * @var bool
     */
    public $layouts;

    /**
     * @var bool
     */
    public $narrator;

    /**
     * @var bool
     */
    public $question;

    /**
     * @var bool
     */
    public $summary;
    protected $_name = [
        'chapterSummary' => 'ChapterSummary',
        'chapterSummaryOption' => 'ChapterSummaryOption',
        'images' => 'Images',
        'keyword' => 'Keyword',
        'layouts' => 'Layouts',
        'narrator' => 'Narrator',
        'question' => 'Question',
        'summary' => 'Summary',
    ];

    public function validate()
    {
        if (null !== $this->chapterSummaryOption) {
            $this->chapterSummaryOption->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chapterSummary) {
            $res['ChapterSummary'] = $this->chapterSummary;
        }

        if (null !== $this->chapterSummaryOption) {
            $res['ChapterSummaryOption'] = null !== $this->chapterSummaryOption ? $this->chapterSummaryOption->toArray($noStream) : $this->chapterSummaryOption;
        }

        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->layouts) {
            $res['Layouts'] = $this->layouts;
        }

        if (null !== $this->narrator) {
            $res['Narrator'] = $this->narrator;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
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

        if (isset($map['ChapterSummaryOption'])) {
            $model->chapterSummaryOption = DocumentChapterSummarizeOption::fromMap($map['ChapterSummaryOption']);
        }

        if (isset($map['Images'])) {
            $model->images = $map['Images'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Layouts'])) {
            $model->layouts = $map['Layouts'];
        }

        if (isset($map['Narrator'])) {
            $model->narrator = $map['Narrator'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
