<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewCheckResultStatusResponseBody\checkResultStatus;

use AlibabaCloud\Tea\Model;

class SQLReviewResult extends Model
{
    /**
     * @description The number of SQL statements that must be modified.
     *
     * @example 1
     *
     * @var int
     */
    public $mustImprove;

    /**
     * @description The number of SQL statements that have potential issues.
     *
     * @example 0
     *
     * @var int
     */
    public $potentialIssue;

    /**
     * @description The number of SQL statements that can be modified.
     *
     * @example 3
     *
     * @var int
     */
    public $suggestImprove;

    /**
     * @description The number of SQL statements that can use indexes.
     *
     * @example 2
     *
     * @var int
     */
    public $tableIndexSuggest;

    /**
     * @description The number of SQL statements that can be used for lock-free data changes.
     *
     * @example 0
     *
     * @var int
     */
    public $useDmsDmlUnlock;

    /**
     * @description The number of SQL statements that can be used for lock-free schema changes.
     *
     * @example 0
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SQLReviewResult
     */
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
