<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillsResponseBody;

use AlibabaCloud\Dara\Model;

class skillList extends Model
{
    /**
     * @var string
     */
    public $assessmentStatus;

    /**
     * @var bool
     */
    public $availableToAgent;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $evaluationStatus;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $riskDetail;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillVersion;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'assessmentStatus' => 'AssessmentStatus',
        'availableToAgent' => 'AvailableToAgent',
        'disabled' => 'Disabled',
        'evaluationStatus' => 'EvaluationStatus',
        'fileCount' => 'FileCount',
        'path' => 'Path',
        'riskDetail' => 'RiskDetail',
        'size' => 'Size',
        'skillName' => 'SkillName',
        'skillVersion' => 'SkillVersion',
        'source' => 'Source',
        'status' => 'Status',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assessmentStatus) {
            $res['AssessmentStatus'] = $this->assessmentStatus;
        }

        if (null !== $this->availableToAgent) {
            $res['AvailableToAgent'] = $this->availableToAgent;
        }

        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }

        if (null !== $this->evaluationStatus) {
            $res['EvaluationStatus'] = $this->evaluationStatus;
        }

        if (null !== $this->fileCount) {
            $res['FileCount'] = $this->fileCount;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->riskDetail) {
            $res['RiskDetail'] = $this->riskDetail;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillVersion) {
            $res['SkillVersion'] = $this->skillVersion;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AssessmentStatus'])) {
            $model->assessmentStatus = $map['AssessmentStatus'];
        }

        if (isset($map['AvailableToAgent'])) {
            $model->availableToAgent = $map['AvailableToAgent'];
        }

        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }

        if (isset($map['EvaluationStatus'])) {
            $model->evaluationStatus = $map['EvaluationStatus'];
        }

        if (isset($map['FileCount'])) {
            $model->fileCount = $map['FileCount'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['RiskDetail'])) {
            $model->riskDetail = $map['RiskDetail'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillVersion'])) {
            $model->skillVersion = $map['SkillVersion'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
