<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class SubmitApplyRecordShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applyRequest;

    /**
     * @var string
     */
    public $commitmentLetter;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventIdListShrink;

    /**
     * @var string
     */
    public $qualificationProof;

    /**
     * @var bool
     */
    public $trial;
    protected $_name = [
        'applyRequest' => 'ApplyRequest',
        'commitmentLetter' => 'CommitmentLetter',
        'description' => 'Description',
        'eventIdListShrink' => 'EventIdList',
        'qualificationProof' => 'QualificationProof',
        'trial' => 'Trial',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyRequest) {
            $res['ApplyRequest'] = $this->applyRequest;
        }

        if (null !== $this->commitmentLetter) {
            $res['CommitmentLetter'] = $this->commitmentLetter;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventIdListShrink) {
            $res['EventIdList'] = $this->eventIdListShrink;
        }

        if (null !== $this->qualificationProof) {
            $res['QualificationProof'] = $this->qualificationProof;
        }

        if (null !== $this->trial) {
            $res['Trial'] = $this->trial;
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
        if (isset($map['ApplyRequest'])) {
            $model->applyRequest = $map['ApplyRequest'];
        }

        if (isset($map['CommitmentLetter'])) {
            $model->commitmentLetter = $map['CommitmentLetter'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EventIdList'])) {
            $model->eventIdListShrink = $map['EventIdList'];
        }

        if (isset($map['QualificationProof'])) {
            $model->qualificationProof = $map['QualificationProof'];
        }

        if (isset($map['Trial'])) {
            $model->trial = $map['Trial'];
        }

        return $model;
    }
}
