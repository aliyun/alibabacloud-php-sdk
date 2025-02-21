<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class tableDetails extends Model
{
    /**
     * @var string
     */
    public $bootTime;
    /**
     * @var int
     */
    public $diffCount;
    /**
     * @var int
     */
    public $errorCode;
    /**
     * @var int
     */
    public $finishCount;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $sourceDbName;
    /**
     * @var string
     */
    public $sourceTbName;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $targetDbName;
    /**
     * @var string
     */
    public $targetTbName;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bootTime'     => 'BootTime',
        'diffCount'    => 'DiffCount',
        'errorCode'    => 'ErrorCode',
        'finishCount'  => 'FinishCount',
        'id'           => 'Id',
        'sourceDbName' => 'SourceDbName',
        'sourceTbName' => 'SourceTbName',
        'status'       => 'Status',
        'targetDbName' => 'TargetDbName',
        'targetTbName' => 'TargetTbName',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bootTime) {
            $res['BootTime'] = $this->bootTime;
        }

        if (null !== $this->diffCount) {
            $res['DiffCount'] = $this->diffCount;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->sourceDbName) {
            $res['SourceDbName'] = $this->sourceDbName;
        }

        if (null !== $this->sourceTbName) {
            $res['SourceTbName'] = $this->sourceTbName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetDbName) {
            $res['TargetDbName'] = $this->targetDbName;
        }

        if (null !== $this->targetTbName) {
            $res['TargetTbName'] = $this->targetTbName;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BootTime'])) {
            $model->bootTime = $map['BootTime'];
        }

        if (isset($map['DiffCount'])) {
            $model->diffCount = $map['DiffCount'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SourceDbName'])) {
            $model->sourceDbName = $map['SourceDbName'];
        }

        if (isset($map['SourceTbName'])) {
            $model->sourceTbName = $map['SourceTbName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetDbName'])) {
            $model->targetDbName = $map['TargetDbName'];
        }

        if (isset($map['TargetTbName'])) {
            $model->targetTbName = $map['TargetTbName'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
