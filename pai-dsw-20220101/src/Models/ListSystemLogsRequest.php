<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ListSystemLogsRequest extends Model
{
    /**
     * @var string
     */
    public $gmtEndTime;

    /**
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lifecycleId;

    /**
     * @var string
     */
    public $logLevel;

    /**
     * @var string
     */
    public $logRepository;

    /**
     * @var string
     */
    public $offset;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $problemCategory;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sourceRequestId;
    protected $_name = [
        'gmtEndTime' => 'GmtEndTime',
        'gmtStartTime' => 'GmtStartTime',
        'instanceId' => 'InstanceId',
        'lifecycleId' => 'LifecycleId',
        'logLevel' => 'LogLevel',
        'logRepository' => 'LogRepository',
        'offset' => 'Offset',
        'order' => 'Order',
        'problemCategory' => 'ProblemCategory',
        'sortBy' => 'SortBy',
        'sourceRequestId' => 'SourceRequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtEndTime) {
            $res['GmtEndTime'] = $this->gmtEndTime;
        }

        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lifecycleId) {
            $res['LifecycleId'] = $this->lifecycleId;
        }

        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }

        if (null !== $this->logRepository) {
            $res['LogRepository'] = $this->logRepository;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->problemCategory) {
            $res['ProblemCategory'] = $this->problemCategory;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->sourceRequestId) {
            $res['SourceRequestId'] = $this->sourceRequestId;
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
        if (isset($map['GmtEndTime'])) {
            $model->gmtEndTime = $map['GmtEndTime'];
        }

        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LifecycleId'])) {
            $model->lifecycleId = $map['LifecycleId'];
        }

        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }

        if (isset($map['LogRepository'])) {
            $model->logRepository = $map['LogRepository'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['ProblemCategory'])) {
            $model->problemCategory = $map['ProblemCategory'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['SourceRequestId'])) {
            $model->sourceRequestId = $map['SourceRequestId'];
        }

        return $model;
    }
}
