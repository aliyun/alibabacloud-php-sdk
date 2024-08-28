<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class gateways extends Model
{
    /**
     * @example 2020-05-19T14:19:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example gw-1uhcqmsc7x22******
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example mygateway1
     *
     * @var string
     */
    public $gatewayName;

    /**
     * @example 2c4g
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example gw-1uhcqmsc7x22******-1801786532******.cn-wulanchabu.pai-eas.aliyuncs.com
     *
     * @var string
     */
    public $internetDomain;

    /**
     * @example true
     *
     * @var bool
     */
    public $internetEnabled;

    /**
     * @example gw-1uhcqmsc7x22******-1801786532******-vpc.cn-wulanchabu.pai-eas.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example 2
     *
     * @var int
     */
    public $replicas;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 2021-02-24T11:52:17Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
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
