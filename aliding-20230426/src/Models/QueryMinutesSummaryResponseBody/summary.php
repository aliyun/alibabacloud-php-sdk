<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\actions;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\autoChapters;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\conversationalSummary;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\keySentences;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\questionsAnsweringSummary;
use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @example {}
     *
     * @var actions
     */
    public $actions;

    /**
     * @example []
     *
     * @var autoChapters[]
     */
    public $autoChapters;

    /**
     * @example []
     *
     * @var conversationalSummary[]
     */
    public $conversationalSummary;

    /**
     * @example {}
     *
     * @var keySentences
     */
    public $keySentences;

    /**
     * @example []
     *
     * @var string[]
     */
    public $keywords;

    /**
     * @example 全文摘要结果，全文摘要通过两三百字的篇幅将最重要的信息呈现出来，用于快速了解记录内容与主旨
     *
     * @var string
     */
    public $paragraphSummary;

    /**
     * @example []
     *
     * @var questionsAnsweringSummary[]
     */
    public $questionsAnsweringSummary;
    protected $_name = [
        'actions'                   => 'Actions',
        'autoChapters'              => 'AutoChapters',
        'conversationalSummary'     => 'ConversationalSummary',
        'keySentences'              => 'KeySentences',
        'keywords'                  => 'Keywords',
        'paragraphSummary'          => 'ParagraphSummary',
        'questionsAnsweringSummary' => 'QuestionsAnsweringSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = null !== $this->actions ? $this->actions->toMap() : null;
        }
        if (null !== $this->autoChapters) {
            $res['AutoChapters'] = [];
            if (null !== $this->autoChapters && \is_array($this->autoChapters)) {
                $n = 0;
                foreach ($this->autoChapters as $item) {
                    $res['AutoChapters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->conversationalSummary) {
            $res['ConversationalSummary'] = [];
            if (null !== $this->conversationalSummary && \is_array($this->conversationalSummary)) {
                $n = 0;
                foreach ($this->conversationalSummary as $item) {
                    $res['ConversationalSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keySentences) {
            $res['KeySentences'] = null !== $this->keySentences ? $this->keySentences->toMap() : null;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->paragraphSummary) {
            $res['ParagraphSummary'] = $this->paragraphSummary;
        }
        if (null !== $this->questionsAnsweringSummary) {
            $res['QuestionsAnsweringSummary'] = [];
            if (null !== $this->questionsAnsweringSummary && \is_array($this->questionsAnsweringSummary)) {
                $n = 0;
                foreach ($this->questionsAnsweringSummary as $item) {
                    $res['QuestionsAnsweringSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            $model->actions = actions::fromMap($map['Actions']);
        }
        if (isset($map['AutoChapters'])) {
            if (!empty($map['AutoChapters'])) {
                $model->autoChapters = [];
                $n                   = 0;
                foreach ($map['AutoChapters'] as $item) {
                    $model->autoChapters[$n++] = null !== $item ? autoChapters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConversationalSummary'])) {
            if (!empty($map['ConversationalSummary'])) {
                $model->conversationalSummary = [];
                $n                            = 0;
                foreach ($map['ConversationalSummary'] as $item) {
                    $model->conversationalSummary[$n++] = null !== $item ? conversationalSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KeySentences'])) {
            $model->keySentences = keySentences::fromMap($map['KeySentences']);
        }
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
            }
        }
        if (isset($map['ParagraphSummary'])) {
            $model->paragraphSummary = $map['ParagraphSummary'];
        }
        if (isset($map['QuestionsAnsweringSummary'])) {
            if (!empty($map['QuestionsAnsweringSummary'])) {
                $model->questionsAnsweringSummary = [];
                $n                                = 0;
                foreach ($map['QuestionsAnsweringSummary'] as $item) {
                    $model->questionsAnsweringSummary[$n++] = null !== $item ? questionsAnsweringSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
