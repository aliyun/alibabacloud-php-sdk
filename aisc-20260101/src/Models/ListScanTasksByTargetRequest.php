<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models;

use AlibabaCloud\Dara\Model;

class ListScanTasksByTargetRequest extends Model
{
    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sampleLevel;

    /**
     * @var string
     */
    public $scanType;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sampleLevel' => 'SampleLevel',
        'scanType' => 'ScanType',
        'targetId' => 'TargetId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->sampleLevel) {
            $res['SampleLevel'] = $this->sampleLevel;
        }

        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SampleLevel'])) {
            $model->sampleLevel = $map['SampleLevel'];
        }

        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
