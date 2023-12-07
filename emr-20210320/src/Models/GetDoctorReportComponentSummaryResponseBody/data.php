<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorReportComponentSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 88
     *
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @description The summary of the report.
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
     * @return data
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
