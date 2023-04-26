<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult;

use AlibabaCloud\Tea\Model;

class textResult extends Model
{
    /**
     * @description The category of the review result. Valid values:
     *
     * - **live**: The content contains undesirable scenes.
     * - **normal**: normal content.
     * @example The position in the video. Unit: milliseconds.
     *
     * @var string
     */
    public $content;

    /**
     * @description The statistics about tag frames.
     *
     * @example ad
     *
     * @var string
     */
    public $label;

    /**
     * @description The position in the video. Unit: milliseconds.
     *
     * @example antispam
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
     * @description The category of the review result. Separate multiple values with commas (,). Valid values:
     *
     *   **porn**
     *   **terrorism**
     *   **normal**
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The results of terrorist content review.
     *
     * @example title
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content'    => 'Content',
        'label'      => 'Label',
        'scene'      => 'Scene',
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
