<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeJobResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeJobResponseBody\data\targetInstanceConfigs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1581595942000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example UbmsMHmkqv0PiAG****010001
     *
     * @var string
     */
    public $jobId;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example iot-cn-6ja***
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @example 198***
     *
     * @var string
     */
    public $sourceUid;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 0
     *
     * @var int
     */
    public $strategy;

    /**
     * @var targetInstanceConfigs
     */
    public $targetInstanceConfigs;

    /**
     * @example 198***
     *
     * @var string
     */
    public $targetUid;

    /**
     * @example 5
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'gmtCreate'             => 'GmtCreate',
        'jobId'                 => 'JobId',
        'productKey'            => 'ProductKey',
        'sourceInstanceId'      => 'SourceInstanceId',
        'sourceUid'             => 'SourceUid',
        'status'                => 'Status',
        'strategy'              => 'Strategy',
        'targetInstanceConfigs' => 'TargetInstanceConfigs',
        'targetUid'             => 'TargetUid',
        'total'                 => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceUid) {
            $res['SourceUid'] = $this->sourceUid;
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
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceUid'])) {
            $model->sourceUid = $map['SourceUid'];
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
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
