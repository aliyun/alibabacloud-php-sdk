<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleEventResponseBody;

use AlibabaCloud\Dara\Model;

class eventList extends Model
{
    /**
     * @var int
     */
    public $clusterCount;

    /**
     * @var int
     */
    public $clusterCpu;

    /**
     * @var int
     */
    public $elasticCpu;

    /**
     * @var string
     */
    public $elasticType;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var int
     */
    public $initClusterCount;

    /**
     * @var int
     */
    public $originalElasticCpu;

    /**
     * @var int
     */
    public $reservedCpu;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $warehouseName;
    protected $_name = [
        'clusterCount' => 'ClusterCount',
        'clusterCpu' => 'ClusterCpu',
        'elasticCpu' => 'ElasticCpu',
        'elasticType' => 'ElasticType',
        'eventName' => 'EventName',
        'eventTime' => 'EventTime',
        'failedReason' => 'FailedReason',
        'initClusterCount' => 'InitClusterCount',
        'originalElasticCpu' => 'OriginalElasticCpu',
        'reservedCpu' => 'ReservedCpu',
        'result' => 'Result',
        'warehouseName' => 'WarehouseName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }

        if (null !== $this->clusterCpu) {
            $res['ClusterCpu'] = $this->clusterCpu;
        }

        if (null !== $this->elasticCpu) {
            $res['ElasticCpu'] = $this->elasticCpu;
        }

        if (null !== $this->elasticType) {
            $res['ElasticType'] = $this->elasticType;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->failedReason) {
            $res['FailedReason'] = $this->failedReason;
        }

        if (null !== $this->initClusterCount) {
            $res['InitClusterCount'] = $this->initClusterCount;
        }

        if (null !== $this->originalElasticCpu) {
            $res['OriginalElasticCpu'] = $this->originalElasticCpu;
        }

        if (null !== $this->reservedCpu) {
            $res['ReservedCpu'] = $this->reservedCpu;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->warehouseName) {
            $res['WarehouseName'] = $this->warehouseName;
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
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }

        if (isset($map['ClusterCpu'])) {
            $model->clusterCpu = $map['ClusterCpu'];
        }

        if (isset($map['ElasticCpu'])) {
            $model->elasticCpu = $map['ElasticCpu'];
        }

        if (isset($map['ElasticType'])) {
            $model->elasticType = $map['ElasticType'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['FailedReason'])) {
            $model->failedReason = $map['FailedReason'];
        }

        if (isset($map['InitClusterCount'])) {
            $model->initClusterCount = $map['InitClusterCount'];
        }

        if (isset($map['OriginalElasticCpu'])) {
            $model->originalElasticCpu = $map['OriginalElasticCpu'];
        }

        if (isset($map['ReservedCpu'])) {
            $model->reservedCpu = $map['ReservedCpu'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['WarehouseName'])) {
            $model->warehouseName = $map['WarehouseName'];
        }

        return $model;
    }
}
