<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListDataCheckReportStepByJobIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $boundary;

    /**
     * @var int
     */
    public $checkColumCount;

    /**
     * @var string
     */
    public $dstCount;

    /**
     * @var string
     */
    public $dstSql;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $gmtEnd;

    /**
     * @var string
     */
    public $gmtStart;

    /**
     * @var int
     */
    public $isConsistent;

    /**
     * @var int
     */
    public $metricColumCount;

    /**
     * @var int
     */
    public $metricPassColumCount;

    /**
     * @var int
     */
    public $passColumCount;

    /**
     * @var string
     */
    public $resultId;

    /**
     * @var string
     */
    public $sourcePtName;

    /**
     * @var string
     */
    public $srcCount;

    /**
     * @var string
     */
    public $srcSql;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $stepId;

    /**
     * @var string
     */
    public $targetPtName;
    protected $_name = [
        'boundary' => 'boundary',
        'checkColumCount' => 'checkColumCount',
        'dstCount' => 'dstCount',
        'dstSql' => 'dstSql',
        'errMessage' => 'errMessage',
        'extra' => 'extra',
        'gmtEnd' => 'gmtEnd',
        'gmtStart' => 'gmtStart',
        'isConsistent' => 'isConsistent',
        'metricColumCount' => 'metricColumCount',
        'metricPassColumCount' => 'metricPassColumCount',
        'passColumCount' => 'passColumCount',
        'resultId' => 'resultId',
        'sourcePtName' => 'sourcePtName',
        'srcCount' => 'srcCount',
        'srcSql' => 'srcSql',
        'status' => 'status',
        'stepId' => 'stepId',
        'targetPtName' => 'targetPtName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundary) {
            $res['boundary'] = $this->boundary;
        }

        if (null !== $this->checkColumCount) {
            $res['checkColumCount'] = $this->checkColumCount;
        }

        if (null !== $this->dstCount) {
            $res['dstCount'] = $this->dstCount;
        }

        if (null !== $this->dstSql) {
            $res['dstSql'] = $this->dstSql;
        }

        if (null !== $this->errMessage) {
            $res['errMessage'] = $this->errMessage;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }

        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }

        if (null !== $this->isConsistent) {
            $res['isConsistent'] = $this->isConsistent;
        }

        if (null !== $this->metricColumCount) {
            $res['metricColumCount'] = $this->metricColumCount;
        }

        if (null !== $this->metricPassColumCount) {
            $res['metricPassColumCount'] = $this->metricPassColumCount;
        }

        if (null !== $this->passColumCount) {
            $res['passColumCount'] = $this->passColumCount;
        }

        if (null !== $this->resultId) {
            $res['resultId'] = $this->resultId;
        }

        if (null !== $this->sourcePtName) {
            $res['sourcePtName'] = $this->sourcePtName;
        }

        if (null !== $this->srcCount) {
            $res['srcCount'] = $this->srcCount;
        }

        if (null !== $this->srcSql) {
            $res['srcSql'] = $this->srcSql;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->stepId) {
            $res['stepId'] = $this->stepId;
        }

        if (null !== $this->targetPtName) {
            $res['targetPtName'] = $this->targetPtName;
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
        if (isset($map['boundary'])) {
            $model->boundary = $map['boundary'];
        }

        if (isset($map['checkColumCount'])) {
            $model->checkColumCount = $map['checkColumCount'];
        }

        if (isset($map['dstCount'])) {
            $model->dstCount = $map['dstCount'];
        }

        if (isset($map['dstSql'])) {
            $model->dstSql = $map['dstSql'];
        }

        if (isset($map['errMessage'])) {
            $model->errMessage = $map['errMessage'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }

        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }

        if (isset($map['isConsistent'])) {
            $model->isConsistent = $map['isConsistent'];
        }

        if (isset($map['metricColumCount'])) {
            $model->metricColumCount = $map['metricColumCount'];
        }

        if (isset($map['metricPassColumCount'])) {
            $model->metricPassColumCount = $map['metricPassColumCount'];
        }

        if (isset($map['passColumCount'])) {
            $model->passColumCount = $map['passColumCount'];
        }

        if (isset($map['resultId'])) {
            $model->resultId = $map['resultId'];
        }

        if (isset($map['sourcePtName'])) {
            $model->sourcePtName = $map['sourcePtName'];
        }

        if (isset($map['srcCount'])) {
            $model->srcCount = $map['srcCount'];
        }

        if (isset($map['srcSql'])) {
            $model->srcSql = $map['srcSql'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['stepId'])) {
            $model->stepId = $map['stepId'];
        }

        if (isset($map['targetPtName'])) {
            $model->targetPtName = $map['targetPtName'];
        }

        return $model;
    }
}
