<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceGroupShrinkRequest extends Model
{
    /**
     * @example rg-aek2kqofrgXXXXX
     *
     * @var string
     */
    public $aliyunResourceGroupId;

    /**
     * @var string
     */
    public $aliyunResourceTagsShrink;

    /**
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @description This parameter is required.
     *
     * @example eb870033-74c8-4b1b-9664-04c4e7cc3465
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example common_resource_group
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $paymentDuration;

    /**
     * @example Month
     *
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @description This parameter is required.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example 创建用于普通任务的通用资源组
     *
     * @var string
     */
    public $remark;

    /**
     * @description The specifications of the resource group. Unit: compute unit (CU). This parameter is required only when you set the PaymentType parameter to PrePaid.
     *
     * @example 2
     *
     * @var int
     */
    public $spec;

    /**
     * @description This parameter is required.
     *
     * @example vpc-m2et4f3oc8msfbccXXXXX
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description This parameter is required.
     *
     * @example vsw-uf8usrhs7hjd9amsXXXXX
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'aliyunResourceGroupId'    => 'AliyunResourceGroupId',
        'aliyunResourceTagsShrink' => 'AliyunResourceTags',
        'autoRenewEnabled'         => 'AutoRenewEnabled',
        'clientToken'              => 'ClientToken',
        'name'                     => 'Name',
        'paymentDuration'          => 'PaymentDuration',
        'paymentDurationUnit'      => 'PaymentDurationUnit',
        'paymentType'              => 'PaymentType',
        'remark'                   => 'Remark',
        'spec'                     => 'Spec',
        'vpcId'                    => 'VpcId',
        'vswitchId'                => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }
        if (null !== $this->aliyunResourceTagsShrink) {
            $res['AliyunResourceTags'] = $this->aliyunResourceTagsShrink;
        }
        if (null !== $this->autoRenewEnabled) {
            $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }
        if (isset($map['AliyunResourceTags'])) {
            $model->aliyunResourceTagsShrink = $map['AliyunResourceTags'];
        }
        if (isset($map['AutoRenewEnabled'])) {
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
