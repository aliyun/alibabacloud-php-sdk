<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DescribeGatewayResponseBody extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $externalClusterId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetDomain;

    /**
     * @var bool
     */
    public $internetEnabled;

    /**
     * @var string
     */
    public $internetStatus;

    /**
     * @var string
     */
    public $intranetDomain;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $SSLRedirectionEnabled;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'externalClusterId' => 'ExternalClusterId',
        'gatewayId' => 'GatewayId',
        'gatewayName' => 'GatewayName',
        'instanceType' => 'InstanceType',
        'internetDomain' => 'InternetDomain',
        'internetEnabled' => 'InternetEnabled',
        'internetStatus' => 'InternetStatus',
        'intranetDomain' => 'IntranetDomain',
        'isDefault' => 'IsDefault',
        'replicas' => 'Replicas',
        'requestId' => 'RequestId',
        'SSLRedirectionEnabled' => 'SSLRedirectionEnabled',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->externalClusterId) {
            $res['ExternalClusterId'] = $this->externalClusterId;
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

        if (null !== $this->internetStatus) {
            $res['InternetStatus'] = $this->internetStatus;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SSLRedirectionEnabled) {
            $res['SSLRedirectionEnabled'] = $this->SSLRedirectionEnabled;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExternalClusterId'])) {
            $model->externalClusterId = $map['ExternalClusterId'];
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

        if (isset($map['InternetStatus'])) {
            $model->internetStatus = $map['InternetStatus'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SSLRedirectionEnabled'])) {
            $model->SSLRedirectionEnabled = $map['SSLRedirectionEnabled'];
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
