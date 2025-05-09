<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus;

use AlibabaCloud\Dara\Model;

class SQLReviewResult extends Model
{
    /**
     * @var int
     */
    public $mustImprove;

    /**
     * @var int
     */
    public $potentialIssue;

    /**
     * @var int
     */
    public $suggestImprove;

    /**
     * @var int
     */
    public $tableIndexSuggest;

    /**
     * @var int
     */
    public $useDmsDmlUnlock;

    /**
     * @var int
     */
    public $useDmsToolkit;
    protected $_name = [
        'mustImprove' => 'MustImprove',
        'potentialIssue' => 'PotentialIssue',
        'suggestImprove' => 'SuggestImprove',
        'tableIndexSuggest' => 'TableIndexSuggest',
        'useDmsDmlUnlock' => 'UseDmsDmlUnlock',
        'useDmsToolkit' => 'UseDmsToolkit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mustImprove) {
            $res['MustImprove'] = $this->mustImprove;
        }

        if (null !== $this->potentialIssue) {
            $res['PotentialIssue'] = $this->potentialIssue;
        }

        if (null !== $this->suggestImprove) {
            $res['SuggestImprove'] = $this->suggestImprove;
        }

        if (null !== $this->tableIndexSuggest) {
            $res['TableIndexSuggest'] = $this->tableIndexSuggest;
        }

        if (null !== $this->useDmsDmlUnlock) {
            $res['UseDmsDmlUnlock'] = $this->useDmsDmlUnlock;
        }

        if (null !== $this->useDmsToolkit) {
            $res['UseDmsToolkit'] = $this->useDmsToolkit;
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
        if (isset($map['MustImprove'])) {
            $model->mustImprove = $map['MustImprove'];
        }

        if (isset($map['PotentialIssue'])) {
            $model->potentialIssue = $map['PotentialIssue'];
        }

        if (isset($map['SuggestImprove'])) {
            $model->suggestImprove = $map['SuggestImprove'];
        }

        if (isset($map['TableIndexSuggest'])) {
            $model->tableIndexSuggest = $map['TableIndexSuggest'];
        }

        if (isset($map['UseDmsDmlUnlock'])) {
            $model->useDmsDmlUnlock = $map['UseDmsDmlUnlock'];
        }

        if (isset($map['UseDmsToolkit'])) {
            $model->useDmsToolkit = $map['UseDmsToolkit'];
        }

        return $model;
    }
}
