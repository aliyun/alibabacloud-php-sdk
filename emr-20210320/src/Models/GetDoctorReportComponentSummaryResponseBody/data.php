<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorReportComponentSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $score;
    /**
     * @var string
     */
    public $suggestion;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
