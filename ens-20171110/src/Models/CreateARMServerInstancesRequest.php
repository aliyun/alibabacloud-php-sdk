<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateARMServerInstancesRequest extends Model
{
    /**
     * @description 数量，最大支持10
     *
     * @var int
     */
    public $amount;

    /**
     * @description 是否自动续费，默认为false。
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description ENS节点ID。
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @var int
     */
    public $frequency;

    /**
     * @description 镜像ID。
     *
     * @var string
     */
    public $imageId;

    /**
     * @description AIC容器实例规格。
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description keypair名称
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description 付费类型。PrePaid（目前只支持此种）：包年包月
     *
     * @var string
     */
    public $payType;

    /**
     * @description 购买周期。
     *
     * @var int
     */
    public $period;

    /**
     * @description Month（默认）：按月计费的价格单位。
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description 分辨率。目前取值
     * 1920*1080
     * 1280*720
     * 1080*1920
     * 720*1280
     * @var string
     */
    public $resolution;

    /**
     * @description 服务器规格。
     *
     * @var string
     */
    public $serverType;
    protected $_name = [
        'amount'       => 'Amount',
        'autoRenew'    => 'AutoRenew',
        'ensRegionId'  => 'EnsRegionId',
        'frequency'    => 'Frequency',
        'imageId'      => 'ImageId',
        'instanceType' => 'InstanceType',
        'keyPairName'  => 'KeyPairName',
        'payType'      => 'PayType',
        'period'       => 'Period',
        'periodUnit'   => 'PeriodUnit',
        'resolution'   => 'Resolution',
        'serverType'   => 'ServerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateARMServerInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        return $model;
    }
}
