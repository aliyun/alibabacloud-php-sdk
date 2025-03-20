<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\adResult\counterList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\adResult\topList;
use AlibabaCloud\Tea\Model;

class adResult extends Model
{
    /**
     * @description The average score of the review results.
     *
     * @example 100
     *
     * @var string
     */
    public $averageScore;

    /**
     * @description The number of snapshots of each category in the review result.
     *
     * @var counterList[]
     */
    public $counterList;

    /**
     * @description The categories of the ad review results. Valid values:
     *
     *   **normal**: normal content
     *   **ad**: other ads
     *   **politics**: political content
     *   **porn**: pornographic content
     *   **abuse**: abuse
     *   **terrorism**: terrorist content
     *   **contraband**: prohibited content
     *   **spam**: spam content
     *   **npx**: illegal ad
     *   **qrcode**: QR code
     *   **programCode**: mini program code
     *
     * @example ad
     *
     * @var string
     */
    public $label;

    /**
     * @description The highest review score.
     *
     * @example 100
     *
     * @var string
     */
    public $maxScore;

    /**
     * @description The recommendation for review results. Valid values:
     *
     *   **block**: The content violates the regulations.
     *   **review**: The content may violate the regulations.
     *   **pass**: The content passes the review.
     *
     * @example block
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The information about the snapshot that has the highest score in the category.
     *
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

    public function validate() {}

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
     * @return adResult
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
                $n = 0;
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
                $n = 0;
                foreach ($map['TopList'] as $item) {
                    $model->topList[$n++] = null !== $item ? topList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
