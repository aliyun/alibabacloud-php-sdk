<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskFileResultListResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskFileResultListResponseBody\data\taskResultReviewInfo\hitRuleSet;
use AlibabaCloud\Tea\Model;

class taskResultReviewInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $hitNumber;

    /**
     * @var int
     */
    public $dataType;

    /**
     * @var string
     */
    public $nextVid;

    /**
     * @var bool
     */
    public $hitRule;

    /**
     * @var string
     */
    public $preVid;

    /**
     * @var bool
     */
    public $isHitRule;

    /**
     * @var int
     */
    public $realViolationNumber;

    /**
     * @var float
     */
    public $reviewAccuracyRate;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $totalScore;

    /**
     * @var int
     */
    public $checkNumber;

    /**
     * @var string
     */
    public $fileMergeName;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var bool
     */
    public $handTaskFile;

    /**
     * @var hitRuleSet
     */
    public $hitRuleSet;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $vid;
    protected $_name = [
        'status'              => 'Status',
        'hitNumber'           => 'HitNumber',
        'dataType'            => 'DataType',
        'nextVid'             => 'NextVid',
        'hitRule'             => 'HitRule',
        'preVid'              => 'PreVid',
        'isHitRule'           => 'IsHitRule',
        'realViolationNumber' => 'RealViolationNumber',
        'reviewAccuracyRate'  => 'ReviewAccuracyRate',
        'fileName'            => 'FileName',
        'totalScore'          => 'TotalScore',
        'checkNumber'         => 'CheckNumber',
        'fileMergeName'       => 'FileMergeName',
        'bucketName'          => 'BucketName',
        'handTaskFile'        => 'HandTaskFile',
        'hitRuleSet'          => 'HitRuleSet',
        'taskId'              => 'TaskId',
        'vid'                 => 'Vid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->hitNumber) {
            $res['HitNumber'] = $this->hitNumber;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->nextVid) {
            $res['NextVid'] = $this->nextVid;
        }
        if (null !== $this->hitRule) {
            $res['HitRule'] = $this->hitRule;
        }
        if (null !== $this->preVid) {
            $res['PreVid'] = $this->preVid;
        }
        if (null !== $this->isHitRule) {
            $res['IsHitRule'] = $this->isHitRule;
        }
        if (null !== $this->realViolationNumber) {
            $res['RealViolationNumber'] = $this->realViolationNumber;
        }
        if (null !== $this->reviewAccuracyRate) {
            $res['ReviewAccuracyRate'] = $this->reviewAccuracyRate;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->totalScore) {
            $res['TotalScore'] = $this->totalScore;
        }
        if (null !== $this->checkNumber) {
            $res['CheckNumber'] = $this->checkNumber;
        }
        if (null !== $this->fileMergeName) {
            $res['FileMergeName'] = $this->fileMergeName;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->handTaskFile) {
            $res['HandTaskFile'] = $this->handTaskFile;
        }
        if (null !== $this->hitRuleSet) {
            $res['HitRuleSet'] = null !== $this->hitRuleSet ? $this->hitRuleSet->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->vid) {
            $res['Vid'] = $this->vid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskResultReviewInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HitNumber'])) {
            $model->hitNumber = $map['HitNumber'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['NextVid'])) {
            $model->nextVid = $map['NextVid'];
        }
        if (isset($map['HitRule'])) {
            $model->hitRule = $map['HitRule'];
        }
        if (isset($map['PreVid'])) {
            $model->preVid = $map['PreVid'];
        }
        if (isset($map['IsHitRule'])) {
            $model->isHitRule = $map['IsHitRule'];
        }
        if (isset($map['RealViolationNumber'])) {
            $model->realViolationNumber = $map['RealViolationNumber'];
        }
        if (isset($map['ReviewAccuracyRate'])) {
            $model->reviewAccuracyRate = $map['ReviewAccuracyRate'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['TotalScore'])) {
            $model->totalScore = $map['TotalScore'];
        }
        if (isset($map['CheckNumber'])) {
            $model->checkNumber = $map['CheckNumber'];
        }
        if (isset($map['FileMergeName'])) {
            $model->fileMergeName = $map['FileMergeName'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['HandTaskFile'])) {
            $model->handTaskFile = $map['HandTaskFile'];
        }
        if (isset($map['HitRuleSet'])) {
            $model->hitRuleSet = hitRuleSet::fromMap($map['HitRuleSet']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Vid'])) {
            $model->vid = $map['Vid'];
        }

        return $model;
    }
}
