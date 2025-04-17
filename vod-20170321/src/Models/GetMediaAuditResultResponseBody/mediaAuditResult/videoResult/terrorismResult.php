<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\terrorismResult\counterList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\terrorismResult\topList;

class terrorismResult extends Model
{
    /**
     * @var string
     */
    public $averageScore;

    /**
     * @var counterList[]
     */
    public $counterList;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $maxScore;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var topList[]
     */
    public $topList;
    protected $_name = [
        'averageScore' => 'AverageScore',
        'counterList' => 'CounterList',
        'label' => 'Label',
        'maxScore' => 'MaxScore',
        'suggestion' => 'Suggestion',
        'topList' => 'TopList',
    ];

    public function validate()
    {
        if (\is_array($this->counterList)) {
            Model::validateArray($this->counterList);
        }
        if (\is_array($this->topList)) {
            Model::validateArray($this->topList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->averageScore) {
            $res['AverageScore'] = $this->averageScore;
        }

        if (null !== $this->counterList) {
            if (\is_array($this->counterList)) {
                $res['CounterList'] = [];
                $n1 = 0;
                foreach ($this->counterList as $item1) {
                    $res['CounterList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->maxScore) {
            $res['MaxScore'] = $this->maxScore;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->topList) {
            if (\is_array($this->topList)) {
                $res['TopList'] = [];
                $n1 = 0;
                foreach ($this->topList as $item1) {
                    $res['TopList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AverageScore'])) {
            $model->averageScore = $map['AverageScore'];
        }

        if (isset($map['CounterList'])) {
            if (!empty($map['CounterList'])) {
                $model->counterList = [];
                $n1 = 0;
                foreach ($map['CounterList'] as $item1) {
                    $model->counterList[$n1++] = counterList::fromMap($item1);
                }
            }
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['MaxScore'])) {
            $model->maxScore = $map['MaxScore'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['TopList'])) {
            if (!empty($map['TopList'])) {
                $model->topList = [];
                $n1 = 0;
                foreach ($map['TopList'] as $item1) {
                    $model->topList[$n1++] = topList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
