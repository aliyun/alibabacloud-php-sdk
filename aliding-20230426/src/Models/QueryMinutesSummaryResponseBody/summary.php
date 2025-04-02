<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\actions;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\autoChapters;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\conversationalSummary;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\keySentences;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary\questionsAnsweringSummary;

class summary extends Model
{
    /**
     * @var actions
     */
    public $actions;

    /**
     * @var autoChapters[]
     */
    public $autoChapters;

    /**
     * @var conversationalSummary[]
     */
    public $conversationalSummary;

    /**
     * @var keySentences
     */
    public $keySentences;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @var string
     */
    public $paragraphSummary;

    /**
     * @var questionsAnsweringSummary[]
     */
    public $questionsAnsweringSummary;
    protected $_name = [
        'actions' => 'Actions',
        'autoChapters' => 'AutoChapters',
        'conversationalSummary' => 'ConversationalSummary',
        'keySentences' => 'KeySentences',
        'keywords' => 'Keywords',
        'paragraphSummary' => 'ParagraphSummary',
        'questionsAnsweringSummary' => 'QuestionsAnsweringSummary',
    ];

    public function validate()
    {
        if (null !== $this->actions) {
            $this->actions->validate();
        }
        if (\is_array($this->autoChapters)) {
            Model::validateArray($this->autoChapters);
        }
        if (\is_array($this->conversationalSummary)) {
            Model::validateArray($this->conversationalSummary);
        }
        if (null !== $this->keySentences) {
            $this->keySentences->validate();
        }
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        if (\is_array($this->questionsAnsweringSummary)) {
            Model::validateArray($this->questionsAnsweringSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = null !== $this->actions ? $this->actions->toArray($noStream) : $this->actions;
        }

        if (null !== $this->autoChapters) {
            if (\is_array($this->autoChapters)) {
                $res['AutoChapters'] = [];
                $n1 = 0;
                foreach ($this->autoChapters as $item1) {
                    $res['AutoChapters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->conversationalSummary) {
            if (\is_array($this->conversationalSummary)) {
                $res['ConversationalSummary'] = [];
                $n1 = 0;
                foreach ($this->conversationalSummary as $item1) {
                    $res['ConversationalSummary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->keySentences) {
            $res['KeySentences'] = null !== $this->keySentences ? $this->keySentences->toArray($noStream) : $this->keySentences;
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->paragraphSummary) {
            $res['ParagraphSummary'] = $this->paragraphSummary;
        }

        if (null !== $this->questionsAnsweringSummary) {
            if (\is_array($this->questionsAnsweringSummary)) {
                $res['QuestionsAnsweringSummary'] = [];
                $n1 = 0;
                foreach ($this->questionsAnsweringSummary as $item1) {
                    $res['QuestionsAnsweringSummary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Actions'])) {
            $model->actions = actions::fromMap($map['Actions']);
        }

        if (isset($map['AutoChapters'])) {
            if (!empty($map['AutoChapters'])) {
                $model->autoChapters = [];
                $n1 = 0;
                foreach ($map['AutoChapters'] as $item1) {
                    $model->autoChapters[$n1++] = autoChapters::fromMap($item1);
                }
            }
        }

        if (isset($map['ConversationalSummary'])) {
            if (!empty($map['ConversationalSummary'])) {
                $model->conversationalSummary = [];
                $n1 = 0;
                foreach ($map['ConversationalSummary'] as $item1) {
                    $model->conversationalSummary[$n1++] = conversationalSummary::fromMap($item1);
                }
            }
        }

        if (isset($map['KeySentences'])) {
            $model->keySentences = keySentences::fromMap($map['KeySentences']);
        }

        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParagraphSummary'])) {
            $model->paragraphSummary = $map['ParagraphSummary'];
        }

        if (isset($map['QuestionsAnsweringSummary'])) {
            if (!empty($map['QuestionsAnsweringSummary'])) {
                $model->questionsAnsweringSummary = [];
                $n1 = 0;
                foreach ($map['QuestionsAnsweringSummary'] as $item1) {
                    $model->questionsAnsweringSummary[$n1++] = questionsAnsweringSummary::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
