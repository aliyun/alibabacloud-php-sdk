<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class MarkOssV2ResultRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $freezeType;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $requestIds;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'endDate' => 'EndDate',
        'freezeType' => 'FreezeType',
        'operation' => 'Operation',
        'requestIds' => 'RequestIds',
        'startDate' => 'StartDate',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->freezeType) {
            $res['FreezeType'] = $this->freezeType;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->requestIds) {
            $res['RequestIds'] = $this->requestIds;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['FreezeType'])) {
            $model->freezeType = $map['FreezeType'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['RequestIds'])) {
            $model->requestIds = $map['RequestIds'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
