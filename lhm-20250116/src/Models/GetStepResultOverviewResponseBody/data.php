<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetStepResultOverviewResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $checkColumnCount;

    /**
     * @var string
     */
    public $dstMetricName;

    /**
     * @var int
     */
    public $isConsistent;

    /**
     * @var int
     */
    public $metricColumnCount;

    /**
     * @var int
     */
    public $metricPassColumnCount;

    /**
     * @var int
     */
    public $passColumnCount;

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
    public $sourceTable;

    /**
     * @var string
     */
    public $srcMetricName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $targetPtName;

    /**
     * @var string
     */
    public $targetTable;
    protected $_name = [
        'checkColumnCount' => 'checkColumnCount',
        'dstMetricName' => 'dstMetricName',
        'isConsistent' => 'isConsistent',
        'metricColumnCount' => 'metricColumnCount',
        'metricPassColumnCount' => 'metricPassColumnCount',
        'passColumnCount' => 'passColumnCount',
        'resultId' => 'resultId',
        'sourcePtName' => 'sourcePtName',
        'sourceTable' => 'sourceTable',
        'srcMetricName' => 'srcMetricName',
        'status' => 'status',
        'targetPtName' => 'targetPtName',
        'targetTable' => 'targetTable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkColumnCount) {
            $res['checkColumnCount'] = $this->checkColumnCount;
        }

        if (null !== $this->dstMetricName) {
            $res['dstMetricName'] = $this->dstMetricName;
        }

        if (null !== $this->isConsistent) {
            $res['isConsistent'] = $this->isConsistent;
        }

        if (null !== $this->metricColumnCount) {
            $res['metricColumnCount'] = $this->metricColumnCount;
        }

        if (null !== $this->metricPassColumnCount) {
            $res['metricPassColumnCount'] = $this->metricPassColumnCount;
        }

        if (null !== $this->passColumnCount) {
            $res['passColumnCount'] = $this->passColumnCount;
        }

        if (null !== $this->resultId) {
            $res['resultId'] = $this->resultId;
        }

        if (null !== $this->sourcePtName) {
            $res['sourcePtName'] = $this->sourcePtName;
        }

        if (null !== $this->sourceTable) {
            $res['sourceTable'] = $this->sourceTable;
        }

        if (null !== $this->srcMetricName) {
            $res['srcMetricName'] = $this->srcMetricName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->targetPtName) {
            $res['targetPtName'] = $this->targetPtName;
        }

        if (null !== $this->targetTable) {
            $res['targetTable'] = $this->targetTable;
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
        if (isset($map['checkColumnCount'])) {
            $model->checkColumnCount = $map['checkColumnCount'];
        }

        if (isset($map['dstMetricName'])) {
            $model->dstMetricName = $map['dstMetricName'];
        }

        if (isset($map['isConsistent'])) {
            $model->isConsistent = $map['isConsistent'];
        }

        if (isset($map['metricColumnCount'])) {
            $model->metricColumnCount = $map['metricColumnCount'];
        }

        if (isset($map['metricPassColumnCount'])) {
            $model->metricPassColumnCount = $map['metricPassColumnCount'];
        }

        if (isset($map['passColumnCount'])) {
            $model->passColumnCount = $map['passColumnCount'];
        }

        if (isset($map['resultId'])) {
            $model->resultId = $map['resultId'];
        }

        if (isset($map['sourcePtName'])) {
            $model->sourcePtName = $map['sourcePtName'];
        }

        if (isset($map['sourceTable'])) {
            $model->sourceTable = $map['sourceTable'];
        }

        if (isset($map['srcMetricName'])) {
            $model->srcMetricName = $map['srcMetricName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['targetPtName'])) {
            $model->targetPtName = $map['targetPtName'];
        }

        if (isset($map['targetTable'])) {
            $model->targetTable = $map['targetTable'];
        }

        return $model;
    }
}
