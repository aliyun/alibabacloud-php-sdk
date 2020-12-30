<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class EnableSqlAuditRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $isRecall;

    /**
     * @var string
     */
    public $recallStartTimestamp;

    /**
     * @var string
     */
    public $recallEndTimestamp;
    protected $_name = [
        'drdsInstanceId'       => 'DrdsInstanceId',
        'dbName'               => 'DbName',
        'isRecall'             => 'IsRecall',
        'recallStartTimestamp' => 'RecallStartTimestamp',
        'recallEndTimestamp'   => 'RecallEndTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->isRecall) {
            $res['IsRecall'] = $this->isRecall;
        }
        if (null !== $this->recallStartTimestamp) {
            $res['RecallStartTimestamp'] = $this->recallStartTimestamp;
        }
        if (null !== $this->recallEndTimestamp) {
            $res['RecallEndTimestamp'] = $this->recallEndTimestamp;
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
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['IsRecall'])) {
            $model->isRecall = $map['IsRecall'];
        }
        if (isset($map['RecallStartTimestamp'])) {
            $model->recallStartTimestamp = $map['RecallStartTimestamp'];
        }
        if (isset($map['RecallEndTimestamp'])) {
            $model->recallEndTimestamp = $map['RecallEndTimestamp'];
        }

        return $model;
    }
}
