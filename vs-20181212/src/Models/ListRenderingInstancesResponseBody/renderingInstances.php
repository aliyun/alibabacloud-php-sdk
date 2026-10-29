<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class renderingInstances extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $maxEgressBandwidth;

    /**
     * @var string
     */
    public $maxIngressBandwidth;

    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string
     */
    public $renderingSpec;

    /**
     * @var string
     */
    public $serverStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'creationTime' => 'CreationTime',
        'expireTime' => 'ExpireTime',
        'instanceName' => 'InstanceName',
        'maxEgressBandwidth' => 'MaxEgressBandwidth',
        'maxIngressBandwidth' => 'MaxIngressBandwidth',
        'renderingInstanceId' => 'RenderingInstanceId',
        'renderingSpec' => 'RenderingSpec',
        'serverStatus' => 'ServerStatus',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->maxEgressBandwidth) {
            $res['MaxEgressBandwidth'] = $this->maxEgressBandwidth;
        }

        if (null !== $this->maxIngressBandwidth) {
            $res['MaxIngressBandwidth'] = $this->maxIngressBandwidth;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        if (null !== $this->renderingSpec) {
            $res['RenderingSpec'] = $this->renderingSpec;
        }

        if (null !== $this->serverStatus) {
            $res['ServerStatus'] = $this->serverStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['MaxEgressBandwidth'])) {
            $model->maxEgressBandwidth = $map['MaxEgressBandwidth'];
        }

        if (isset($map['MaxIngressBandwidth'])) {
            $model->maxIngressBandwidth = $map['MaxIngressBandwidth'];
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        if (isset($map['RenderingSpec'])) {
            $model->renderingSpec = $map['RenderingSpec'];
        }

        if (isset($map['ServerStatus'])) {
            $model->serverStatus = $map['ServerStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
