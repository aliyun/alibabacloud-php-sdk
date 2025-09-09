<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class EnableSqlAuditRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var bool
     */
    public $isRecall;

    /**
     * @var string
     */
    public $recallEndTimestamp;

    /**
     * @var string
     */
    public $recallStartTimestamp;
    protected $_name = [
        'dbName' => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'isRecall' => 'IsRecall',
        'recallEndTimestamp' => 'RecallEndTimestamp',
        'recallStartTimestamp' => 'RecallStartTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
