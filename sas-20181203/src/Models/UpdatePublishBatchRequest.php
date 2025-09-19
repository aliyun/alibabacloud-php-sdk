<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdatePublishBatchRequest extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var string
     */
    public $batchName;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $operationBase;
    protected $_name = [
        'batchId' => 'BatchId',
        'batchName' => 'BatchName',
        'interval' => 'Interval',
        'operationBase' => 'OperationBase',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->batchName) {
            $res['BatchName'] = $this->batchName;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->operationBase) {
            $res['OperationBase'] = $this->operationBase;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['BatchName'])) {
            $model->batchName = $map['BatchName'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['OperationBase'])) {
            $model->operationBase = $map['OperationBase'];
        }

        return $model;
    }
}
