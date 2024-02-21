<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorReportsResponseBody\data;

use AlibabaCloud\Tea\Model;

class summaryReport extends Model
{
    /**
     * @description The score.
     *
     * @example 88
     *
     * @var int
     */
    public $score;

    /**
     * @description The optimization suggestion.
     *
     * @example block
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The summary of the report.
     *
     * @example eastbuy-mse-plugin-auth
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
        'summary'    => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
