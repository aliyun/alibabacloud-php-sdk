<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ExecDataCheckSqlPreviewRequest extends Model
{
    /**
     * @var string
     */
    public $checkColumn;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $engineId;

    /**
     * @var string
     */
    public $fullTableName;

    /**
     * @var string
     */
    public $partitionCondition;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $whereClause;
    protected $_name = [
        'checkColumn' => 'checkColumn',
        'dataSourceId' => 'dataSourceId',
        'engineId' => 'engineId',
        'fullTableName' => 'fullTableName',
        'partitionCondition' => 'partitionCondition',
        'taskId' => 'taskId',
        'whereClause' => 'whereClause',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkColumn) {
            $res['checkColumn'] = $this->checkColumn;
        }

        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->engineId) {
            $res['engineId'] = $this->engineId;
        }

        if (null !== $this->fullTableName) {
            $res['fullTableName'] = $this->fullTableName;
        }

        if (null !== $this->partitionCondition) {
            $res['partitionCondition'] = $this->partitionCondition;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->whereClause) {
            $res['whereClause'] = $this->whereClause;
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
        if (isset($map['checkColumn'])) {
            $model->checkColumn = $map['checkColumn'];
        }

        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }

        if (isset($map['engineId'])) {
            $model->engineId = $map['engineId'];
        }

        if (isset($map['fullTableName'])) {
            $model->fullTableName = $map['fullTableName'];
        }

        if (isset($map['partitionCondition'])) {
            $model->partitionCondition = $map['partitionCondition'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['whereClause'])) {
            $model->whereClause = $map['whereClause'];
        }

        return $model;
    }
}
