<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcJusticeCourtAnnouncementResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $caseNum;

    /**
     * @var string
     */
    public $causeAction;

    /**
     * @var string
     */
    public $court;

    /**
     * @var string
     */
    public $department;

    /**
     * @example 2021-07-14 11:11:00
     *
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
    public $title;

    /**
     * @var string
     */
    public $tribunal;
    protected $_name = [
        'caseNum'     => 'CaseNum',
        'causeAction' => 'CauseAction',
        'court'       => 'Court',
        'department'  => 'Department',
        'hearingDate' => 'HearingDate',
        'judge'       => 'Judge',
        'party'       => 'Party',
        'title'       => 'Title',
        'tribunal'    => 'Tribunal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caseNum) {
            $res['CaseNum'] = $this->caseNum;
        }
        if (null !== $this->causeAction) {
            $res['CauseAction'] = $this->causeAction;
        }
        if (null !== $this->court) {
            $res['Court'] = $this->court;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->tribunal) {
            $res['Tribunal'] = $this->tribunal;
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
        if (isset($map['CaseNum'])) {
            $model->caseNum = $map['CaseNum'];
        }
        if (isset($map['CauseAction'])) {
            $model->causeAction = $map['CauseAction'];
        }
        if (isset($map['Court'])) {
            $model->court = $map['Court'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Tribunal'])) {
            $model->tribunal = $map['Tribunal'];
        }

        return $model;
    }
}
