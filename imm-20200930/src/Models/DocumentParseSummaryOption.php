<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DocumentParseSummaryOption extends Model
{
    /**
     * @var bool
     */
    public $chapterSummarize;

    /**
     * @var bool
     */
    public $summarize;
    protected $_name = [
        'chapterSummarize' => 'ChapterSummarize',
        'summarize' => 'Summarize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chapterSummarize) {
            $res['ChapterSummarize'] = $this->chapterSummarize;
        }

        if (null !== $this->summarize) {
            $res['Summarize'] = $this->summarize;
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
        if (isset($map['ChapterSummarize'])) {
            $model->chapterSummarize = $map['ChapterSummarize'];
        }

        if (isset($map['Summarize'])) {
            $model->summarize = $map['Summarize'];
        }

        return $model;
    }
}
