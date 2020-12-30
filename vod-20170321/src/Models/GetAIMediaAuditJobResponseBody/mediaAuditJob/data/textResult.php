<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data;

use AlibabaCloud\Tea\Model;

class textResult extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'type'       => 'Type',
        'suggestion' => 'Suggestion',
        'score'      => 'Score',
        'label'      => 'Label',
        'content'    => 'Content',
        'scene'      => 'Scene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
