<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DocumentReadOption extends Model
{
    /**
     * @var DocumentReadKeywordOption
     */
    public $keyword;

    /**
     * @var DocumentReadNarratorOption
     */
    public $narrator;

    /**
     * @var DocumentReadQuestionOption
     */
    public $question;

    /**
     * @var DocumentReadSummaryOption
     */
    public $summary;
    protected $_name = [
        'keyword' => 'Keyword',
        'narrator' => 'Narrator',
        'question' => 'Question',
        'summary' => 'Summary',
    ];

    public function validate()
    {
        if (null !== $this->keyword) {
            $this->keyword->validate();
        }
        if (null !== $this->narrator) {
            $this->narrator->validate();
        }
        if (null !== $this->question) {
            $this->question->validate();
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = null !== $this->keyword ? $this->keyword->toArray($noStream) : $this->keyword;
        }

        if (null !== $this->narrator) {
            $res['Narrator'] = null !== $this->narrator ? $this->narrator->toArray($noStream) : $this->narrator;
        }

        if (null !== $this->question) {
            $res['Question'] = null !== $this->question ? $this->question->toArray($noStream) : $this->question;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
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
        if (isset($map['Keyword'])) {
            $model->keyword = DocumentReadKeywordOption::fromMap($map['Keyword']);
        }

        if (isset($map['Narrator'])) {
            $model->narrator = DocumentReadNarratorOption::fromMap($map['Narrator']);
        }

        if (isset($map['Question'])) {
            $model->question = DocumentReadQuestionOption::fromMap($map['Question']);
        }

        if (isset($map['Summary'])) {
            $model->summary = DocumentReadSummaryOption::fromMap($map['Summary']);
        }

        return $model;
    }
}
