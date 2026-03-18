<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstanceDiagnosisResultResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bestPractice;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var int
     */
    public $evaluationTime;

    /**
     * @var float
     */
    public $fullScore;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $reportDate;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'bestPractice' => 'BestPractice',
        'description' => 'Description',
        'dimension' => 'Dimension',
        'evaluationTime' => 'EvaluationTime',
        'fullScore' => 'FullScore',
        'instanceId' => 'InstanceId',
        'introduction' => 'Introduction',
        'itemId' => 'ItemId',
        'itemName' => 'ItemName',
        'reportDate' => 'ReportDate',
        'score' => 'Score',
        'status' => 'Status',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bestPractice) {
            $res['BestPractice'] = $this->bestPractice;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->evaluationTime) {
            $res['EvaluationTime'] = $this->evaluationTime;
        }

        if (null !== $this->fullScore) {
            $res['FullScore'] = $this->fullScore;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->reportDate) {
            $res['ReportDate'] = $this->reportDate;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['BestPractice'])) {
            $model->bestPractice = $map['BestPractice'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['EvaluationTime'])) {
            $model->evaluationTime = $map['EvaluationTime'];
        }

        if (isset($map['FullScore'])) {
            $model->fullScore = $map['FullScore'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['ReportDate'])) {
            $model->reportDate = $map['ReportDate'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
