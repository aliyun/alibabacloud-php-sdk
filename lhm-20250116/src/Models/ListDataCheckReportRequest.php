<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ListDataCheckReportRequest extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var int
     */
    public $jobStatus;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'batchId' => 'batchId',
        'checkResult' => 'checkResult',
        'jobStatus' => 'jobStatus',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'tableName' => 'tableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}
