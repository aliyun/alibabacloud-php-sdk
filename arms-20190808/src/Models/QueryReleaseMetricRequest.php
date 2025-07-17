<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryReleaseMetricRequest extends Model
{
    /**
     * @description The ID of the change order.
     *
     * This parameter is required.
     *
     * @example a341a2f2-ed07-4257-aae9-dfb1be******
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @description The time when the change order was created.
     *
     * @example 1634005438000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The type of the metric that you want to query.
     *
     * @example SystemContrast
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The ID of the Enterprise Distributed Application Service (EDAS) or Kubernetes application.
     *
     * This parameter is required.
     *
     * @example 8b46d03f-5947-449d-90fd-3a96c2******
     *
     * @var string
     */
    public $pid;

    /**
     * @description This parameter is not in use.
     *
     * @example null
     *
     * @var string
     */
    public $proxyUserId;

    /**
     * @description The end time of the version release.
     *
     * This parameter is required.
     *
     * @example 1632798718632
     *
     * @var int
     */
    public $releaseEndTime;

    /**
     * @description The start time of the version release.
     *
     * This parameter is required.
     *
     * @example 1632798686692
     *
     * @var int
     */
    public $releaseStartTime;

    /**
     * @description The service that you want to query.
     *
     * @example clothservice
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'changeOrderId' => 'ChangeOrderId',
        'createTime' => 'CreateTime',
        'metricType' => 'MetricType',
        'pid' => 'Pid',
        'proxyUserId' => 'ProxyUserId',
        'releaseEndTime' => 'ReleaseEndTime',
        'releaseStartTime' => 'ReleaseStartTime',
        'service' => 'Service',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->releaseEndTime) {
            $res['ReleaseEndTime'] = $this->releaseEndTime;
        }
        if (null !== $this->releaseStartTime) {
            $res['ReleaseStartTime'] = $this->releaseStartTime;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryReleaseMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ReleaseEndTime'])) {
            $model->releaseEndTime = $map['ReleaseEndTime'];
        }
        if (isset($map['ReleaseStartTime'])) {
            $model->releaseStartTime = $map['ReleaseStartTime'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
