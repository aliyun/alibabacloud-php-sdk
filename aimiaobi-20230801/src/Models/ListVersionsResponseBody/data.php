<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $concurrentCount;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $instanceCount;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var int
     */
    public $quota;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var int
     */
    public $useQuota;
    /**
     * @var string
     */
    public $versionDetail;
    /**
     * @var string
     */
    public $versionName;
    /**
     * @var int
     */
    public $versionStatus;
    protected $_name = [
        'concurrentCount' => 'ConcurrentCount',
        'endTime'         => 'EndTime',
        'instanceCount'   => 'InstanceCount',
        'instanceId'      => 'InstanceId',
        'orderId'         => 'OrderId',
        'productType'     => 'ProductType',
        'quota'           => 'Quota',
        'startTime'       => 'StartTime',
        'useQuota'        => 'UseQuota',
        'versionDetail'   => 'VersionDetail',
        'versionName'     => 'VersionName',
        'versionStatus'   => 'VersionStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrentCount) {
            $res['ConcurrentCount'] = $this->concurrentCount;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->useQuota) {
            $res['UseQuota'] = $this->useQuota;
        }

        if (null !== $this->versionDetail) {
            $res['VersionDetail'] = $this->versionDetail;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        if (null !== $this->versionStatus) {
            $res['VersionStatus'] = $this->versionStatus;
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
        if (isset($map['ConcurrentCount'])) {
            $model->concurrentCount = $map['ConcurrentCount'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UseQuota'])) {
            $model->useQuota = $map['UseQuota'];
        }

        if (isset($map['VersionDetail'])) {
            $model->versionDetail = $map['VersionDetail'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        if (isset($map['VersionStatus'])) {
            $model->versionStatus = $map['VersionStatus'];
        }

        return $model;
    }
}
