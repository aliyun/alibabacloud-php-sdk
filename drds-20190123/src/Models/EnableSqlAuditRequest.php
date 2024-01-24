<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class EnableSqlAuditRequest extends Model
{
    /**
     * @description The name of the database for which you want to enable the SQL audit feature.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds***********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description Specifies whether to backtrack historical SQL statements for auditing.
     *
     * @example true
     *
     * @var bool
     */
    public $isRecall;

    /**
     * @description The timestamp that indicates when the backtracking ends. Unit: milliseconds.
     *
     * > The end time of the backtracking must be later than the start time of the backtracking.
     * @example 1568875132000
     *
     * @var string
     */
    public $recallEndTimestamp;

    /**
     * @description The timestamp that indicates when the backtracking starts. Unit: milliseconds.
     *
     * @example 1568875132000
     *
     * @var string
     */
    public $recallStartTimestamp;
    protected $_name = [
        'dbName'               => 'DbName',
        'drdsInstanceId'       => 'DrdsInstanceId',
        'isRecall'             => 'IsRecall',
        'recallEndTimestamp'   => 'RecallEndTimestamp',
        'recallStartTimestamp' => 'RecallStartTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->isRecall) {
            $res['IsRecall'] = $this->isRecall;
        }
        if (null !== $this->recallEndTimestamp) {
            $res['RecallEndTimestamp'] = $this->recallEndTimestamp;
        }
        if (null !== $this->recallStartTimestamp) {
            $res['RecallStartTimestamp'] = $this->recallStartTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableSqlAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['IsRecall'])) {
            $model->isRecall = $map['IsRecall'];
        }
        if (isset($map['RecallEndTimestamp'])) {
            $model->recallEndTimestamp = $map['RecallEndTimestamp'];
        }
        if (isset($map['RecallStartTimestamp'])) {
            $model->recallStartTimestamp = $map['RecallStartTimestamp'];
        }

        return $model;
    }
}
