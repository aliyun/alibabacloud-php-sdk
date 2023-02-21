<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCaseFilingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $assistant;

    /**
     * @var string
     */
    public $caseNum;

    /**
     * @var string
     */
    public $caseStatus;

    /**
     * @var string
     */
    public $causeAction;

    /**
     * @example 2022-01-07
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 2013-02-16
     *
     * @var string
     */
    public $filingDate;

    /**
     * @var string
     */
    public $hearingDate;

    /**
     * @var string
     */
    public $judge;

    /**
     * @var string
     */
    public $party;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'assistant'   => 'Assistant',
        'caseNum'     => 'CaseNum',
        'caseStatus'  => 'CaseStatus',
        'causeAction' => 'CauseAction',
        'endDate'     => 'EndDate',
        'filingDate'  => 'FilingDate',
        'hearingDate' => 'HearingDate',
        'judge'       => 'Judge',
        'party'       => 'Party',
        'role'        => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistant) {
            $res['Assistant'] = $this->assistant;
        }
        if (null !== $this->caseNum) {
            $res['CaseNum'] = $this->caseNum;
        }
        if (null !== $this->caseStatus) {
            $res['CaseStatus'] = $this->caseStatus;
        }
        if (null !== $this->causeAction) {
            $res['CauseAction'] = $this->causeAction;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->filingDate) {
            $res['FilingDate'] = $this->filingDate;
        }
        if (null !== $this->hearingDate) {
            $res['HearingDate'] = $this->hearingDate;
        }
        if (null !== $this->judge) {
            $res['Judge'] = $this->judge;
        }
        if (null !== $this->party) {
            $res['Party'] = $this->party;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['Assistant'])) {
            $model->assistant = $map['Assistant'];
        }
        if (isset($map['CaseNum'])) {
            $model->caseNum = $map['CaseNum'];
        }
        if (isset($map['CaseStatus'])) {
            $model->caseStatus = $map['CaseStatus'];
        }
        if (isset($map['CauseAction'])) {
            $model->causeAction = $map['CauseAction'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['FilingDate'])) {
            $model->filingDate = $map['FilingDate'];
        }
        if (isset($map['HearingDate'])) {
            $model->hearingDate = $map['HearingDate'];
        }
        if (isset($map['Judge'])) {
            $model->judge = $map['Judge'];
        }
        if (isset($map['Party'])) {
            $model->party = $map['Party'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
