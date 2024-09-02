<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayResponseBody extends Model
{
    /**
     * @description The time when the private gateway was created. The time is displayed in UTC.
     *
     * @example 2020-05-19T14:19:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the self-managed cluster.
     *
     * @example c935eadf284c14c2da57a2a13ad6******
     *
     * @var string
     */
    public $externalClusterId;

    /**
     * @description The ID of the private gateway.
     *
     * @example gw-1uhcqmsc7x22******
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The alias of the private gateway.
     *
     * @example mygateway1
     *
     * @var string
     */
    public $gatewayName;

    /**
     * @description The instance type used by the private gateway.
     *
     * Valid values:
     *
     *   8c16g
     *   4c8g
     *   2c4g
     *   16c32g
     *
     * @example ecs.c6.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The public endpoint.
     *
     * @example gw-1uhcqmsc7x22******-1801786532******.cn-hangzhou.pai-eas.aliyuncs.com
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
     * @description Indicates whether Internet access is enabled.
     *
     * Valid values:
     *
     *   Creating: Internet access is being enabled.
     *   Failed: Internet access failed to be enabled or deleted.
     *   Running: Internet access is running.
     *   Deleted: Internet access is deleted.
     *   Deleting: Internet access is being deleted.
     *
     * @example Running
     *
     * @var string
     */
    public $internetStatus;

    /**
     * @description The internal endpoint.
     *
     * @example gw-1uhcqmsc7x22******-1801786532******-vpc.cn-hangzhou.pai-eas.aliyuncs.com
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
     * @description The request ID.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the private gateway.
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
     * @example PrivateGatewayRunning
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
        'createTime'        => 'CreateTime',
        'externalClusterId' => 'ExternalClusterId',
        'gatewayId'         => 'GatewayId',
        'gatewayName'       => 'GatewayName',
        'instanceType'      => 'InstanceType',
        'internetDomain'    => 'InternetDomain',
        'internetEnabled'   => 'InternetEnabled',
        'internetStatus'    => 'InternetStatus',
        'intranetDomain'    => 'IntranetDomain',
        'isDefault'         => 'IsDefault',
        'replicas'          => 'Replicas',
        'requestId'         => 'RequestId',
        'status'            => 'Status',
        'updateTime'        => 'UpdateTime',
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
     * @return DescribeGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
