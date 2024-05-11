<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryReleaseMetricRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example a341a2f2-ed07-4257-aae9-dfb1be******
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @example 1634005438000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example SystemContrast
     *
     * @var string
     */
    public $metricType;

    /**
     * @description This parameter is required.
     *
     * @example 8b46d03f-5947-449d-90fd-3a96c2******
     *
     * @var string
     */
    public $pid;

    /**
     * @example null
     *
     * @var string
     */
    public $proxyUserId;

    /**
     * @description This parameter is required.
     *
     * @example 1632798718632
     *
     * @var int
     */
    public $releaseEndTime;

    /**
     * @description This parameter is required.
     *
     * @example 1632798686692
     *
     * @var int
     */
    public $releaseStartTime;

    /**
     * @example clothservice
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'changeOrderId'    => 'ChangeOrderId',
        'createTime'       => 'CreateTime',
        'metricType'       => 'MetricType',
        'pid'              => 'Pid',
        'proxyUserId'      => 'ProxyUserId',
        'releaseEndTime'   => 'ReleaseEndTime',
        'releaseStartTime' => 'ReleaseStartTime',
        'service'          => 'Service',
    ];

    public function validate()
    {
    }

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
