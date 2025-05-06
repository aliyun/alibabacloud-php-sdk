<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data\caseResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data\caseResult\caseDomain\trialCourt;

class caseDomain extends Model
{
    /**
     * @var string
     */
    public $abstractObj;

    /**
     * @var string
     */
    public $appliedLaws;

    /**
     * @var string
     */
    public $basicCase;

    /**
     * @var string
     */
    public $caseBasic;

    /**
     * @var string
     */
    public $caseCause;

    /**
     * @var string
     */
    public $caseFeature;

    /**
     * @var string
     */
    public $caseId;

    /**
     * @var string
     */
    public $caseNo;

    /**
     * @var string
     */
    public $caseSummary;

    /**
     * @var string
     */
    public $caseTitle;

    /**
     * @var string
     */
    public $caseType;

    /**
     * @var string
     */
    public $closeCaseCause;

    /**
     * @var string
     */
    public $courtFindOut;

    /**
     * @var string
     */
    public $courtThink;

    /**
     * @var string
     */
    public $dataFrom;

    /**
     * @var string
     */
    public $disputeFocus;

    /**
     * @var string[]
     */
    public $disputeFocusTag;

    /**
     * @var string
     */
    public $disputedpoints;

    /**
     * @var string
     */
    public $documentType;

    /**
     * @var string
     */
    public $judgReason;

    /**
     * @var string
     */
    public $keyfacts;

    /**
     * @var string
     */
    public $legalBasis;

    /**
     * @var string
     */
    public $litigants;

    /**
     * @var string
     */
    public $litigationParticipant;

    /**
     * @var string
     */
    public $openCaseCause;

    /**
     * @var string
     */
    public $preTrialProcess;

    /**
     * @var string
     */
    public $referLevel;

    /**
     * @var string
     */
    public $refereeGist;

    /**
     * @var string
     */
    public $sourceContent;

    /**
     * @var trialCourt
     */
    public $trialCourt;

    /**
     * @var string
     */
    public $trialDate;

    /**
     * @var string
     */
    public $trialLevel;

    /**
     * @var string
     */
    public $trialProcess;

    /**
     * @var string
     */
    public $trialProgram;

    /**
     * @var string
     */
    public $verdict;
    protected $_name = [
        'abstractObj' => 'abstractObj',
        'appliedLaws' => 'appliedLaws',
        'basicCase' => 'basicCase',
        'caseBasic' => 'caseBasic',
        'caseCause' => 'caseCause',
        'caseFeature' => 'caseFeature',
        'caseId' => 'caseId',
        'caseNo' => 'caseNo',
        'caseSummary' => 'caseSummary',
        'caseTitle' => 'caseTitle',
        'caseType' => 'caseType',
        'closeCaseCause' => 'closeCaseCause',
        'courtFindOut' => 'courtFindOut',
        'courtThink' => 'courtThink',
        'dataFrom' => 'dataFrom',
        'disputeFocus' => 'disputeFocus',
        'disputeFocusTag' => 'disputeFocusTag',
        'disputedpoints' => 'disputedpoints',
        'documentType' => 'documentType',
        'judgReason' => 'judgReason',
        'keyfacts' => 'keyfacts',
        'legalBasis' => 'legalBasis',
        'litigants' => 'litigants',
        'litigationParticipant' => 'litigationParticipant',
        'openCaseCause' => 'openCaseCause',
        'preTrialProcess' => 'preTrialProcess',
        'referLevel' => 'referLevel',
        'refereeGist' => 'refereeGist',
        'sourceContent' => 'sourceContent',
        'trialCourt' => 'trialCourt',
        'trialDate' => 'trialDate',
        'trialLevel' => 'trialLevel',
        'trialProcess' => 'trialProcess',
        'trialProgram' => 'trialProgram',
        'verdict' => 'verdict',
    ];

    public function validate()
    {
        if (\is_array($this->disputeFocusTag)) {
            Model::validateArray($this->disputeFocusTag);
        }
        if (null !== $this->trialCourt) {
            $this->trialCourt->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abstractObj) {
            $res['abstractObj'] = $this->abstractObj;
        }

        if (null !== $this->appliedLaws) {
            $res['appliedLaws'] = $this->appliedLaws;
        }

        if (null !== $this->basicCase) {
            $res['basicCase'] = $this->basicCase;
        }

        if (null !== $this->caseBasic) {
            $res['caseBasic'] = $this->caseBasic;
        }

        if (null !== $this->caseCause) {
            $res['caseCause'] = $this->caseCause;
        }

        if (null !== $this->caseFeature) {
            $res['caseFeature'] = $this->caseFeature;
        }

        if (null !== $this->caseId) {
            $res['caseId'] = $this->caseId;
        }

        if (null !== $this->caseNo) {
            $res['caseNo'] = $this->caseNo;
        }

        if (null !== $this->caseSummary) {
            $res['caseSummary'] = $this->caseSummary;
        }

        if (null !== $this->caseTitle) {
            $res['caseTitle'] = $this->caseTitle;
        }

        if (null !== $this->caseType) {
            $res['caseType'] = $this->caseType;
        }

        if (null !== $this->closeCaseCause) {
            $res['closeCaseCause'] = $this->closeCaseCause;
        }

        if (null !== $this->courtFindOut) {
            $res['courtFindOut'] = $this->courtFindOut;
        }

        if (null !== $this->courtThink) {
            $res['courtThink'] = $this->courtThink;
        }

        if (null !== $this->dataFrom) {
            $res['dataFrom'] = $this->dataFrom;
        }

        if (null !== $this->disputeFocus) {
            $res['disputeFocus'] = $this->disputeFocus;
        }

        if (null !== $this->disputeFocusTag) {
            if (\is_array($this->disputeFocusTag)) {
                $res['disputeFocusTag'] = [];
                $n1 = 0;
                foreach ($this->disputeFocusTag as $item1) {
                    $res['disputeFocusTag'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->disputedpoints) {
            $res['disputedpoints'] = $this->disputedpoints;
        }

        if (null !== $this->documentType) {
            $res['documentType'] = $this->documentType;
        }

        if (null !== $this->judgReason) {
            $res['judgReason'] = $this->judgReason;
        }

        if (null !== $this->keyfacts) {
            $res['keyfacts'] = $this->keyfacts;
        }

        if (null !== $this->legalBasis) {
            $res['legalBasis'] = $this->legalBasis;
        }

        if (null !== $this->litigants) {
            $res['litigants'] = $this->litigants;
        }

        if (null !== $this->litigationParticipant) {
            $res['litigationParticipant'] = $this->litigationParticipant;
        }

        if (null !== $this->openCaseCause) {
            $res['openCaseCause'] = $this->openCaseCause;
        }

        if (null !== $this->preTrialProcess) {
            $res['preTrialProcess'] = $this->preTrialProcess;
        }

        if (null !== $this->referLevel) {
            $res['referLevel'] = $this->referLevel;
        }

        if (null !== $this->refereeGist) {
            $res['refereeGist'] = $this->refereeGist;
        }

        if (null !== $this->sourceContent) {
            $res['sourceContent'] = $this->sourceContent;
        }

        if (null !== $this->trialCourt) {
            $res['trialCourt'] = null !== $this->trialCourt ? $this->trialCourt->toArray($noStream) : $this->trialCourt;
        }

        if (null !== $this->trialDate) {
            $res['trialDate'] = $this->trialDate;
        }

        if (null !== $this->trialLevel) {
            $res['trialLevel'] = $this->trialLevel;
        }

        if (null !== $this->trialProcess) {
            $res['trialProcess'] = $this->trialProcess;
        }

        if (null !== $this->trialProgram) {
            $res['trialProgram'] = $this->trialProgram;
        }

        if (null !== $this->verdict) {
            $res['verdict'] = $this->verdict;
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
        if (isset($map['abstractObj'])) {
            $model->abstractObj = $map['abstractObj'];
        }

        if (isset($map['appliedLaws'])) {
            $model->appliedLaws = $map['appliedLaws'];
        }

        if (isset($map['basicCase'])) {
            $model->basicCase = $map['basicCase'];
        }

        if (isset($map['caseBasic'])) {
            $model->caseBasic = $map['caseBasic'];
        }

        if (isset($map['caseCause'])) {
            $model->caseCause = $map['caseCause'];
        }

        if (isset($map['caseFeature'])) {
            $model->caseFeature = $map['caseFeature'];
        }

        if (isset($map['caseId'])) {
            $model->caseId = $map['caseId'];
        }

        if (isset($map['caseNo'])) {
            $model->caseNo = $map['caseNo'];
        }

        if (isset($map['caseSummary'])) {
            $model->caseSummary = $map['caseSummary'];
        }

        if (isset($map['caseTitle'])) {
            $model->caseTitle = $map['caseTitle'];
        }

        if (isset($map['caseType'])) {
            $model->caseType = $map['caseType'];
        }

        if (isset($map['closeCaseCause'])) {
            $model->closeCaseCause = $map['closeCaseCause'];
        }

        if (isset($map['courtFindOut'])) {
            $model->courtFindOut = $map['courtFindOut'];
        }

        if (isset($map['courtThink'])) {
            $model->courtThink = $map['courtThink'];
        }

        if (isset($map['dataFrom'])) {
            $model->dataFrom = $map['dataFrom'];
        }

        if (isset($map['disputeFocus'])) {
            $model->disputeFocus = $map['disputeFocus'];
        }

        if (isset($map['disputeFocusTag'])) {
            if (!empty($map['disputeFocusTag'])) {
                $model->disputeFocusTag = [];
                $n1 = 0;
                foreach ($map['disputeFocusTag'] as $item1) {
                    $model->disputeFocusTag[$n1++] = $item1;
                }
            }
        }

        if (isset($map['disputedpoints'])) {
            $model->disputedpoints = $map['disputedpoints'];
        }

        if (isset($map['documentType'])) {
            $model->documentType = $map['documentType'];
        }

        if (isset($map['judgReason'])) {
            $model->judgReason = $map['judgReason'];
        }

        if (isset($map['keyfacts'])) {
            $model->keyfacts = $map['keyfacts'];
        }

        if (isset($map['legalBasis'])) {
            $model->legalBasis = $map['legalBasis'];
        }

        if (isset($map['litigants'])) {
            $model->litigants = $map['litigants'];
        }

        if (isset($map['litigationParticipant'])) {
            $model->litigationParticipant = $map['litigationParticipant'];
        }

        if (isset($map['openCaseCause'])) {
            $model->openCaseCause = $map['openCaseCause'];
        }

        if (isset($map['preTrialProcess'])) {
            $model->preTrialProcess = $map['preTrialProcess'];
        }

        if (isset($map['referLevel'])) {
            $model->referLevel = $map['referLevel'];
        }

        if (isset($map['refereeGist'])) {
            $model->refereeGist = $map['refereeGist'];
        }

        if (isset($map['sourceContent'])) {
            $model->sourceContent = $map['sourceContent'];
        }

        if (isset($map['trialCourt'])) {
            $model->trialCourt = trialCourt::fromMap($map['trialCourt']);
        }

        if (isset($map['trialDate'])) {
            $model->trialDate = $map['trialDate'];
        }

        if (isset($map['trialLevel'])) {
            $model->trialLevel = $map['trialLevel'];
        }

        if (isset($map['trialProcess'])) {
            $model->trialProcess = $map['trialProcess'];
        }

        if (isset($map['trialProgram'])) {
            $model->trialProgram = $map['trialProgram'];
        }

        if (isset($map['verdict'])) {
            $model->verdict = $map['verdict'];
        }

        return $model;
    }
}
