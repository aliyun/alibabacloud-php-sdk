<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class tableDetails extends Model
{
    /**
     * @description The time when data verification was performed.
     *
     * @example 2023-01-18 11:26:59
     *
     * @var string
     */
    public $bootTime;

    /**
     * @description The number of data rows that contain inconsistent data.
     *
     * @example 1
     *
     * @var int
     */
    public $diffCount;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var int
     */
    public $errorCode;

    /**
     * @description The number of data rows that were verified.
     *
     * @example 7
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description The auto-increment primary key that is used to identify the data in a verification result.
     *
     * @example 167401241974****
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the source database.
     *
     * @example testdb
     *
     * @var string
     */
    public $sourceDbName;

    /**
     * @description The name of the source table.
     *
     * @example student
     *
     * @var string
     */
    public $sourceTbName;

    /**
     * @description The state of the data verification task. Valid values:
     *
     *   **0**: The data verification task was complete.
     *   **2**: The data verification task was being initialized.
     *   **3**: The data verification task was in progress.
     *   **5**: The data verification task failed.
     *
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the destination database.
     *
     * @example testdb
     *
     * @var string
     */
    public $targetDbName;

    /**
     * @description The name of the destination table.
     *
     * @example person
     *
     * @var string
     */
    public $targetTbName;

    /**
     * @description The total number of data rows.
     *
     * @example 8
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tableDetails
     */
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
