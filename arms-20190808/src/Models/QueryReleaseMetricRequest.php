<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryReleaseMetricRequest extends Model
{
    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var int
     */
    public $releaseEndTime;

    /**
     * @var int
     */
    public $releaseStartTime;

    /**
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
