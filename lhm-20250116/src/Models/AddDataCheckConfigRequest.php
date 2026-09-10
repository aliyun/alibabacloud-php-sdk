<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class AddDataCheckConfigRequest extends Model
{
    /**
     * @var int
     */
    public $isFullTableCount;

    /**
     * @var string
     */
    public $sourceColumns;

    /**
     * @var string
     */
    public $sourceGroupClause;

    /**
     * @var string
     */
    public $sourceHint;

    /**
     * @var string
     */
    public $sourcePartition;

    /**
     * @var string
     */
    public $sourceTable;

    /**
     * @var string
     */
    public $sourceWhereClause;

    /**
     * @var string
     */
    public $targetColumns;

    /**
     * @var string
     */
    public $targetGroupClause;

    /**
     * @var string
     */
    public $targetHint;

    /**
     * @var string
     */
    public $targetPartition;

    /**
     * @var string
     */
    public $targetTable;

    /**
     * @var string
     */
    public $targetWhereClause;

    /**
     * @var string
     */
    public $taskConfigInfo;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var float
     */
    public $totalCountThreshold;
    protected $_name = [
        'isFullTableCount' => 'isFullTableCount',
        'sourceColumns' => 'sourceColumns',
        'sourceGroupClause' => 'sourceGroupClause',
        'sourceHint' => 'sourceHint',
        'sourcePartition' => 'sourcePartition',
        'sourceTable' => 'sourceTable',
        'sourceWhereClause' => 'sourceWhereClause',
        'targetColumns' => 'targetColumns',
        'targetGroupClause' => 'targetGroupClause',
        'targetHint' => 'targetHint',
        'targetPartition' => 'targetPartition',
        'targetTable' => 'targetTable',
        'targetWhereClause' => 'targetWhereClause',
        'taskConfigInfo' => 'taskConfigInfo',
        'taskId' => 'taskId',
        'totalCountThreshold' => 'totalCountThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isFullTableCount) {
            $res['isFullTableCount'] = $this->isFullTableCount;
        }

        if (null !== $this->sourceColumns) {
            $res['sourceColumns'] = $this->sourceColumns;
        }

        if (null !== $this->sourceGroupClause) {
            $res['sourceGroupClause'] = $this->sourceGroupClause;
        }

        if (null !== $this->sourceHint) {
            $res['sourceHint'] = $this->sourceHint;
        }

        if (null !== $this->sourcePartition) {
            $res['sourcePartition'] = $this->sourcePartition;
        }

        if (null !== $this->sourceTable) {
            $res['sourceTable'] = $this->sourceTable;
        }

        if (null !== $this->sourceWhereClause) {
            $res['sourceWhereClause'] = $this->sourceWhereClause;
        }

        if (null !== $this->targetColumns) {
            $res['targetColumns'] = $this->targetColumns;
        }

        if (null !== $this->targetGroupClause) {
            $res['targetGroupClause'] = $this->targetGroupClause;
        }

        if (null !== $this->targetHint) {
            $res['targetHint'] = $this->targetHint;
        }

        if (null !== $this->targetPartition) {
            $res['targetPartition'] = $this->targetPartition;
        }

        if (null !== $this->targetTable) {
            $res['targetTable'] = $this->targetTable;
        }

        if (null !== $this->targetWhereClause) {
            $res['targetWhereClause'] = $this->targetWhereClause;
        }

        if (null !== $this->taskConfigInfo) {
            $res['taskConfigInfo'] = $this->taskConfigInfo;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->totalCountThreshold) {
            $res['totalCountThreshold'] = $this->totalCountThreshold;
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
        if (isset($map['isFullTableCount'])) {
            $model->isFullTableCount = $map['isFullTableCount'];
        }

        if (isset($map['sourceColumns'])) {
            $model->sourceColumns = $map['sourceColumns'];
        }

        if (isset($map['sourceGroupClause'])) {
            $model->sourceGroupClause = $map['sourceGroupClause'];
        }

        if (isset($map['sourceHint'])) {
            $model->sourceHint = $map['sourceHint'];
        }

        if (isset($map['sourcePartition'])) {
            $model->sourcePartition = $map['sourcePartition'];
        }

        if (isset($map['sourceTable'])) {
            $model->sourceTable = $map['sourceTable'];
        }

        if (isset($map['sourceWhereClause'])) {
            $model->sourceWhereClause = $map['sourceWhereClause'];
        }

        if (isset($map['targetColumns'])) {
            $model->targetColumns = $map['targetColumns'];
        }

        if (isset($map['targetGroupClause'])) {
            $model->targetGroupClause = $map['targetGroupClause'];
        }

        if (isset($map['targetHint'])) {
            $model->targetHint = $map['targetHint'];
        }

        if (isset($map['targetPartition'])) {
            $model->targetPartition = $map['targetPartition'];
        }

        if (isset($map['targetTable'])) {
            $model->targetTable = $map['targetTable'];
        }

        if (isset($map['targetWhereClause'])) {
            $model->targetWhereClause = $map['targetWhereClause'];
        }

        if (isset($map['taskConfigInfo'])) {
            $model->taskConfigInfo = $map['taskConfigInfo'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['totalCountThreshold'])) {
            $model->totalCountThreshold = $map['totalCountThreshold'];
        }

        return $model;
    }
}
