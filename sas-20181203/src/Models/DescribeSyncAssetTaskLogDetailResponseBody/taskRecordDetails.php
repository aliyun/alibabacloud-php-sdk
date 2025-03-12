<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskLogDetailResponseBody;

use AlibabaCloud\Tea\Model;

class taskRecordDetails extends Model
{
    /**
     * @description The total number of assets.
     *
     * @example 5
     *
     * @var int
     */
    public $assetCount;

    /**
     * @description The region of the server in the data center.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $idcRegion;

    /**
     * @description The ID of the task.
     *
     * @example 6c4e4c36ffc3e5919120b405c2b3****
     *
     * @var string
     */
    public $leafTaskId;

    /**
     * @description The status of the task. Valid values:
     *
     *   **INIT**: The task is not started.
     *   **START**: The task is started.
     *   **MESSAGE_SEND**: The command is sent.
     *   **SUCCESS**: The task is complete.
     *   **FAIL**: The task failed.
     *   **TIMEOUT**: The task timed out.
     *
     * @example INIT
     *
     * @var string
     */
    public $leafTaskStatus;

    /**
     * @description The description of the task.
     *
     * @example unknown reason
     *
     * @var string
     */
    public $taskMsg;

    /**
     * @description The timestamp when the task results were reported.
     *
     * @example 1671614217000
     *
     * @var int
     */
    public $taskReportTime;

    /**
     * @description The number of unprotected assets.
     *
     * @example 0
     *
     * @var int
     */
    public $unprotectedAssetCount;
    protected $_name = [
        'assetCount'            => 'AssetCount',
        'idcRegion'             => 'IdcRegion',
        'leafTaskId'            => 'LeafTaskId',
        'leafTaskStatus'        => 'LeafTaskStatus',
        'taskMsg'               => 'TaskMsg',
        'taskReportTime'        => 'TaskReportTime',
        'unprotectedAssetCount' => 'UnprotectedAssetCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetCount) {
            $res['AssetCount'] = $this->assetCount;
        }
        if (null !== $this->idcRegion) {
            $res['IdcRegion'] = $this->idcRegion;
        }
        if (null !== $this->leafTaskId) {
            $res['LeafTaskId'] = $this->leafTaskId;
        }
        if (null !== $this->leafTaskStatus) {
            $res['LeafTaskStatus'] = $this->leafTaskStatus;
        }
        if (null !== $this->taskMsg) {
            $res['TaskMsg'] = $this->taskMsg;
        }
        if (null !== $this->taskReportTime) {
            $res['TaskReportTime'] = $this->taskReportTime;
        }
        if (null !== $this->unprotectedAssetCount) {
            $res['UnprotectedAssetCount'] = $this->unprotectedAssetCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskRecordDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetCount'])) {
            $model->assetCount = $map['AssetCount'];
        }
        if (isset($map['IdcRegion'])) {
            $model->idcRegion = $map['IdcRegion'];
        }
        if (isset($map['LeafTaskId'])) {
            $model->leafTaskId = $map['LeafTaskId'];
        }
        if (isset($map['LeafTaskStatus'])) {
            $model->leafTaskStatus = $map['LeafTaskStatus'];
        }
        if (isset($map['TaskMsg'])) {
            $model->taskMsg = $map['TaskMsg'];
        }
        if (isset($map['TaskReportTime'])) {
            $model->taskReportTime = $map['TaskReportTime'];
        }
        if (isset($map['UnprotectedAssetCount'])) {
            $model->unprotectedAssetCount = $map['UnprotectedAssetCount'];
        }

        return $model;
    }
}
