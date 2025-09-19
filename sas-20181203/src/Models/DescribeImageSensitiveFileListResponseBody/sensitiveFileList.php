<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageSensitiveFileListResponseBody;

use AlibabaCloud\Dara\Model;

class sensitiveFileList extends Model
{
    /**
     * @var string
     */
    public $advice;

    /**
     * @var string
     */
    public $classKey;

    /**
     * @var string
     */
    public $className;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $firstScanTime;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sensitiveFileKey;

    /**
     * @var string
     */
    public $sensitiveFileName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $unprocessedNum;
    protected $_name = [
        'advice' => 'Advice',
        'classKey' => 'ClassKey',
        'className' => 'ClassName',
        'count' => 'Count',
        'description' => 'Description',
        'firstScanTime' => 'FirstScanTime',
        'lastScanTime' => 'LastScanTime',
        'riskLevel' => 'RiskLevel',
        'sensitiveFileKey' => 'SensitiveFileKey',
        'sensitiveFileName' => 'SensitiveFileName',
        'status' => 'Status',
        'unprocessedNum' => 'UnprocessedNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }

        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }

        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }

        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sensitiveFileKey) {
            $res['SensitiveFileKey'] = $this->sensitiveFileKey;
        }

        if (null !== $this->sensitiveFileName) {
            $res['SensitiveFileName'] = $this->sensitiveFileName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unprocessedNum) {
            $res['UnprocessedNum'] = $this->unprocessedNum;
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
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }

        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }

        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }

        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SensitiveFileKey'])) {
            $model->sensitiveFileKey = $map['SensitiveFileKey'];
        }

        if (isset($map['SensitiveFileName'])) {
            $model->sensitiveFileName = $map['SensitiveFileName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnprocessedNum'])) {
            $model->unprocessedNum = $map['UnprocessedNum'];
        }

        return $model;
    }
}
