<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateMyCatEvaluateRequest extends Model
{
    /**
     * @var int
     */
    public $busPeakQps;

    /**
     * @var int
     */
    public $capacityIncPercent;

    /**
     * @var string[]
     */
    public $importDbList;

    /**
     * @var int
     */
    public $qpsIncPercent;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleUrl;

    /**
     * @var string
     */
    public $schemaUrl;

    /**
     * @var int
     */
    public $sequenceType;

    /**
     * @var string
     */
    public $serverUrl;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'busPeakQps'         => 'BusPeakQps',
        'capacityIncPercent' => 'CapacityIncPercent',
        'importDbList'       => 'ImportDbList',
        'qpsIncPercent'      => 'QpsIncPercent',
        'regionId'           => 'RegionId',
        'ruleUrl'            => 'RuleUrl',
        'schemaUrl'          => 'SchemaUrl',
        'sequenceType'       => 'SequenceType',
        'serverUrl'          => 'ServerUrl',
        'taskName'           => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->busPeakQps) {
            $res['BusPeakQps'] = $this->busPeakQps;
        }
        if (null !== $this->capacityIncPercent) {
            $res['CapacityIncPercent'] = $this->capacityIncPercent;
        }
        if (null !== $this->importDbList) {
            $res['ImportDbList'] = $this->importDbList;
        }
        if (null !== $this->qpsIncPercent) {
            $res['QpsIncPercent'] = $this->qpsIncPercent;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleUrl) {
            $res['RuleUrl'] = $this->ruleUrl;
        }
        if (null !== $this->schemaUrl) {
            $res['SchemaUrl'] = $this->schemaUrl;
        }
        if (null !== $this->sequenceType) {
            $res['SequenceType'] = $this->sequenceType;
        }
        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMyCatEvaluateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusPeakQps'])) {
            $model->busPeakQps = $map['BusPeakQps'];
        }
        if (isset($map['CapacityIncPercent'])) {
            $model->capacityIncPercent = $map['CapacityIncPercent'];
        }
        if (isset($map['ImportDbList'])) {
            if (!empty($map['ImportDbList'])) {
                $model->importDbList = $map['ImportDbList'];
            }
        }
        if (isset($map['QpsIncPercent'])) {
            $model->qpsIncPercent = $map['QpsIncPercent'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleUrl'])) {
            $model->ruleUrl = $map['RuleUrl'];
        }
        if (isset($map['SchemaUrl'])) {
            $model->schemaUrl = $map['SchemaUrl'];
        }
        if (isset($map['SequenceType'])) {
            $model->sequenceType = $map['SequenceType'];
        }
        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
