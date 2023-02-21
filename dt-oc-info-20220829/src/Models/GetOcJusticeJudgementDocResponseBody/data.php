<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeJudgementDocResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $caseFlow;

    /**
     * @var string
     */
    public $caseNum;

    /**
     * @var string
     */
    public $caseType;

    /**
     * @var string
     */
    public $causeAction;

    /**
     * @var string
     */
    public $court;

    /**
     * @example -
     *
     * @var string
     */
    public $defendant;

    /**
     * @example 2022-01-29
     *
     * @var string
     */
    public $judgeDate;

    /**
     * @var string
     */
    public $judgeResult;

    /**
     * @example -
     *
     * @var string
     */
    public $judgeType;

    /**
     * @var string
     */
    public $party;

    /**
     * @example -
     *
     * @var string
     */
    public $plaintiff;

    /**
     * @example 2016-06-02
     *
     * @var string
     */
    public $publicDate;

    /**
     * @var string
     */
    public $role;

    /**
     * @example -
     *
     * @var string
     */
    public $subAmount;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'caseFlow'    => 'CaseFlow',
        'caseNum'     => 'CaseNum',
        'caseType'    => 'CaseType',
        'causeAction' => 'CauseAction',
        'court'       => 'Court',
        'defendant'   => 'Defendant',
        'judgeDate'   => 'JudgeDate',
        'judgeResult' => 'JudgeResult',
        'judgeType'   => 'JudgeType',
        'party'       => 'Party',
        'plaintiff'   => 'Plaintiff',
        'publicDate'  => 'PublicDate',
        'role'        => 'Role',
        'subAmount'   => 'SubAmount',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseFlow) {
            $res['CaseFlow'] = $this->caseFlow;
        }
        if (null !== $this->caseNum) {
            $res['CaseNum'] = $this->caseNum;
        }
        if (null !== $this->caseType) {
            $res['CaseType'] = $this->caseType;
        }
        if (null !== $this->causeAction) {
            $res['CauseAction'] = $this->causeAction;
        }
        if (null !== $this->court) {
            $res['Court'] = $this->court;
        }
        if (null !== $this->defendant) {
            $res['Defendant'] = $this->defendant;
        }
        if (null !== $this->judgeDate) {
            $res['JudgeDate'] = $this->judgeDate;
        }
        if (null !== $this->judgeResult) {
            $res['JudgeResult'] = $this->judgeResult;
        }
        if (null !== $this->judgeType) {
            $res['JudgeType'] = $this->judgeType;
        }
        if (null !== $this->party) {
            $res['Party'] = $this->party;
        }
        if (null !== $this->plaintiff) {
            $res['Plaintiff'] = $this->plaintiff;
        }
        if (null !== $this->publicDate) {
            $res['PublicDate'] = $this->publicDate;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->subAmount) {
            $res['SubAmount'] = $this->subAmount;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CaseFlow'])) {
            $model->caseFlow = $map['CaseFlow'];
        }
        if (isset($map['CaseNum'])) {
            $model->caseNum = $map['CaseNum'];
        }
        if (isset($map['CaseType'])) {
            $model->caseType = $map['CaseType'];
        }
        if (isset($map['CauseAction'])) {
            $model->causeAction = $map['CauseAction'];
        }
        if (isset($map['Court'])) {
            $model->court = $map['Court'];
        }
        if (isset($map['Defendant'])) {
            $model->defendant = $map['Defendant'];
        }
        if (isset($map['JudgeDate'])) {
            $model->judgeDate = $map['JudgeDate'];
        }
        if (isset($map['JudgeResult'])) {
            $model->judgeResult = $map['JudgeResult'];
        }
        if (isset($map['JudgeType'])) {
            $model->judgeType = $map['JudgeType'];
        }
        if (isset($map['Party'])) {
            $model->party = $map['Party'];
        }
        if (isset($map['Plaintiff'])) {
            $model->plaintiff = $map['Plaintiff'];
        }
        if (isset($map['PublicDate'])) {
            $model->publicDate = $map['PublicDate'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SubAmount'])) {
            $model->subAmount = $map['SubAmount'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
