<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\imageResult;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The highest review score.
     *
     * @example porn
     *
     * @var string
     */
    public $label;

    /**
     * @description The category of the review result. Valid values:
     *
     * - **normal**
     * - **bloody**
     * - **explosion**
     * - **outfit**
     * - **logo**
     * - **weapon**
     * - **politics**
     * - **violence**
     * - **crowd**
     * - **parade**
     * - **carcrash**
     * - **flag**
     * - **location**
     * - **others**
     * @example porn
     *
     * @var string
     */
    public $scene;

    /**
     * @description The recommendation for review results. Valid values:
     *
     *   **block**
     *   **review**
     *   **pass**
     *
     * @example 100.00000
     *
     * @var string
     */
    public $score;

    /**
     * @description The category of the review result.
     *
     * - **ad**
     * - **normal**
     * @example pass
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label'      => 'Label',
        'scene'      => 'Scene',
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
