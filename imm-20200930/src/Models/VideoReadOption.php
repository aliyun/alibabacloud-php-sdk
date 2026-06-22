<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class VideoReadOption extends Model
{
    /**
     * @var VideoReadKeywordOption
     */
    public $keyword;

    /**
     * @var VideoReadPPTOption
     */
    public $PPT;

    /**
     * @var VideoReadQuestionOption
     */
    public $question;

    /**
     * @var VideoReadSummaryOption
     */
    public $summary;
    protected $_name = [
        'keyword' => 'Keyword',
        'PPT' => 'PPT',
        'question' => 'Question',
        'summary' => 'Summary',
    ];

    public function validate()
    {
        if (null !== $this->keyword) {
            $this->keyword->validate();
        }
        if (null !== $this->PPT) {
            $this->PPT->validate();
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

        if (null !== $this->PPT) {
            $res['PPT'] = null !== $this->PPT ? $this->PPT->toArray($noStream) : $this->PPT;
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
            $model->keyword = VideoReadKeywordOption::fromMap($map['Keyword']);
        }

        if (isset($map['PPT'])) {
            $model->PPT = VideoReadPPTOption::fromMap($map['PPT']);
        }

        if (isset($map['Question'])) {
            $model->question = VideoReadQuestionOption::fromMap($map['Question']);
        }

        if (isset($map['Summary'])) {
            $model->summary = VideoReadSummaryOption::fromMap($map['Summary']);
        }

        return $model;
    }
}
