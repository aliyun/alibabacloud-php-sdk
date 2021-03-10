<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponse\data\jobInfo;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponse\data\jobInfo\items\targetInstanceConfigs;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $sourceUid;

    /**
     * @var string
     */
    public $targetUid;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $strategy;

    /**
     * @var targetInstanceConfigs
     */
    public $targetInstanceConfigs;
    protected $_name = [
        'gmtCreate'             => 'GmtCreate',
        'sourceUid'             => 'SourceUid',
        'targetUid'             => 'TargetUid',
        'jobId'                 => 'JobId',
        'sourceInstanceId'      => 'SourceInstanceId',
        'productKey'            => 'ProductKey',
        'total'                 => 'Total',
        'status'                => 'Status',
        'strategy'              => 'Strategy',
        'targetInstanceConfigs' => 'TargetInstanceConfigs',
    ];

    public function validate()
    {
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('sourceUid', $this->sourceUid, true);
        Model::validateRequired('targetUid', $this->targetUid, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('sourceInstanceId', $this->sourceInstanceId, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('strategy', $this->strategy, true);
        Model::validateRequired('targetInstanceConfigs', $this->targetInstanceConfigs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->sourceUid) {
            $res['SourceUid'] = $this->sourceUid;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->targetInstanceConfigs) {
            $res['TargetInstanceConfigs'] = null !== $this->targetInstanceConfigs ? $this->targetInstanceConfigs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['SourceUid'])) {
            $model->sourceUid = $map['SourceUid'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['TargetInstanceConfigs'])) {
            $model->targetInstanceConfigs = targetInstanceConfigs::fromMap($map['TargetInstanceConfigs']);
        }

        return $model;
    }
}
