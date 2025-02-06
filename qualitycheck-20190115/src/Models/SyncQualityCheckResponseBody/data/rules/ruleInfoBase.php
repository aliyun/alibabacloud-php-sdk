<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules;

use AlibabaCloud\Dara\Model;

class ruleInfoBase extends Model
{
    /**
     * @var string
     */
    public $comments;
    /**
     * @var int
     */
    public $level;
    /**
     * @var string
     */
    public $ruleCategoryName;
    /**
     * @var int
     */
    public $scoreNum;
    /**
     * @var int
     */
    public $scoreNumType;
    /**
     * @var int
     */
    public $scoreType;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'comments'         => 'Comments',
        'level'            => 'Level',
        'ruleCategoryName' => 'RuleCategoryName',
        'scoreNum'         => 'ScoreNum',
        'scoreNumType'     => 'ScoreNumType',
        'scoreType'        => 'ScoreType',
        'type'             => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->ruleCategoryName) {
            $res['RuleCategoryName'] = $this->ruleCategoryName;
        }

        if (null !== $this->scoreNum) {
            $res['ScoreNum'] = $this->scoreNum;
        }

        if (null !== $this->scoreNumType) {
            $res['ScoreNumType'] = $this->scoreNumType;
        }

        if (null !== $this->scoreType) {
            $res['ScoreType'] = $this->scoreType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['RuleCategoryName'])) {
            $model->ruleCategoryName = $map['RuleCategoryName'];
        }

        if (isset($map['ScoreNum'])) {
            $model->scoreNum = $map['ScoreNum'];
        }

        if (isset($map['ScoreNumType'])) {
            $model->scoreNumType = $map['ScoreNumType'];
        }

        if (isset($map['ScoreType'])) {
            $model->scoreType = $map['ScoreType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
