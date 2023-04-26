<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\pornResult\counterList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\pornResult\topList;
use AlibabaCloud\Tea\Model;

class pornResult extends Model
{
    /**
     * @description The category of the review result. Valid values:
     *
     * - **live**: The content contains undesirable scenes.
     * - **normal**: normal content.
     * @example 100
     *
     * @var string
     */
    public $averageScore;

    /**
     * @description The category of the review result. Valid values:
     *
     * - **porn**
     * - **sexy**
     * - **normal**
     * @var counterList[]
     */
    public $counterList;

    /**
     * @description The review scenario. Valid values:
     *
     *   **terrorism**
     *   **porn**
     *
     * @example porn
     *
     * @var string
     */
    public $label;

    /**
     * @description The information about the image with the highest score of the category that is indicated by Label.
     *
     * @example 100
     *
     * @var string
     */
    public $maxScore;

    /**
     * @description The position in the video. Unit: milliseconds.
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The score of the image of the category that is indicated by Label.
     *
     * @var topList[]
     */
    public $topList;
    protected $_name = [
        'averageScore' => 'AverageScore',
        'counterList'  => 'CounterList',
        'label'        => 'Label',
        'maxScore'     => 'MaxScore',
        'suggestion'   => 'Suggestion',
        'topList'      => 'TopList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageScore) {
            $res['AverageScore'] = $this->averageScore;
        }
        if (null !== $this->counterList) {
            $res['CounterList'] = [];
            if (null !== $this->counterList && \is_array($this->counterList)) {
                $n = 0;
                foreach ($this->counterList as $item) {
                    $res['CounterList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['TopList'] = [];
            if (null !== $this->topList && \is_array($this->topList)) {
                $n = 0;
                foreach ($this->topList as $item) {
                    $res['TopList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageScore'])) {
            $model->averageScore = $map['AverageScore'];
        }
        if (isset($map['CounterList'])) {
            if (!empty($map['CounterList'])) {
                $model->counterList = [];
                $n                  = 0;
                foreach ($map['CounterList'] as $item) {
                    $model->counterList[$n++] = null !== $item ? counterList::fromMap($item) : $item;
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
                $n              = 0;
                foreach ($map['TopList'] as $item) {
                    $model->topList[$n++] = null !== $item ? topList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
