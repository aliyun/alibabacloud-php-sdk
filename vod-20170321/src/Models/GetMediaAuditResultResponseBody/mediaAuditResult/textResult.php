<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult;

use AlibabaCloud\Tea\Model;

class textResult extends Model
{
    /**
     * @description The text content for review.
     *
     * @example hot line 123****
     *
     * @var string
     */
    public $content;

    /**
     * @description The category of the review result. Valid values:
     *
     * - **spam**
     * - **ad**
     * - **abuse**
     * - **flood**
     * - **contraband**
     * - **meaningless**
     * - **normal**
     * @example ad
     *
     * @var string
     */
    public $label;

    /**
     * @description The review scenario. The value is **antispam**.
     *
     * @example antispam
     *
     * @var string
     */
    public $scene;

    /**
     * @description The score of the image of the category that is indicated by Label.
     *
     * @example 100.00000
     *
     * @var string
     */
    public $score;

    /**
     * @description The recommendation for review results. Valid values:
     *
     * - **block**
     * - **review**
     * - **pass**
     * @example pass
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The type of the text. The value is **title**.
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
