<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class gateways extends Model
{
    /**
     * @description The billing method. Valid values:
     *
     *   PrePaid: subscription.
     *   PostPaid: pay-as-you-go.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the private gateway was created. The time is displayed in UTC.
     *
     * @example 2020-05-19T14:19:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The private gateway ID.
     *
     * @example gw-1uhcqmsc7x22******
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The private gateway alias.
     *
     * @example mygateway1
     *
     * @var string
     */
    public $gatewayName;

    /**
     * @description The type of instances used for the private gateway.
     *
     * @example 2c4g
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The public endpoint.
     *
     * @example gw-1uhcqmsc7x22******-1801786532******.cn-wulanchabu.pai-eas.aliyuncs.com
     *
     * @var string
     */
    public $internetDomain;

    /**
     * @description Indicates whether Internet access is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $internetEnabled;

    /**
     * @description The internal endpoint.
     *
     * @example gw-1uhcqmsc7x22******-1801786532******-vpc.cn-wulanchabu.pai-eas.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @description Indicates whether it is the default private gateway.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The number of nodes in the private gateway.
     *
     * @example 2
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The state of the private gateway.
     *
     * Valid values:
     *
     *   Creating
     *   Stopped
     *   Failed
     *   Running
     *   Deleted
     *   Deleting
     *   Waiting
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the private gateway was updated. The time is displayed in UTC.
     *
     * @example 2021-02-24T11:52:17Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'chargeType'      => 'ChargeType',
        'createTime'      => 'CreateTime',
        'gatewayId'       => 'GatewayId',
        'gatewayName'     => 'GatewayName',
        'instanceType'    => 'InstanceType',
        'internetDomain'  => 'InternetDomain',
        'internetEnabled' => 'InternetEnabled',
        'intranetDomain'  => 'IntranetDomain',
        'isDefault'       => 'IsDefault',
        'replicas'        => 'Replicas',
        'status'          => 'Status',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetDomain) {
            $res['InternetDomain'] = $this->internetDomain;
        }
        if (null !== $this->internetEnabled) {
            $res['InternetEnabled'] = $this->internetEnabled;
        }
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetDomain'])) {
            $model->internetDomain = $map['InternetDomain'];
        }
        if (isset($map['InternetEnabled'])) {
            $model->internetEnabled = $map['InternetEnabled'];
        }
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
