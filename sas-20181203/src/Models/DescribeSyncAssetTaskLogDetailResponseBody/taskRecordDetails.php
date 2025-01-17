<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSyncAssetTaskLogDetailResponseBody;

use AlibabaCloud\Dara\Model;

class taskRecordDetails extends Model
{
    /**
     * @var int
     */
    public $assetCount;
    /**
     * @var string
     */
    public $idcRegion;
    /**
     * @var string
     */
    public $leafTaskId;
    /**
     * @var string
     */
    public $leafTaskStatus;
    /**
     * @var string
     */
    public $taskMsg;
    /**
     * @var int
     */
    public $taskReportTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
