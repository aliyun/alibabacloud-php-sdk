<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class UnassociateAnycastEipAddressRequest extends Model
{
    /**
     * @description The ID of the Anycast EIP.
     *
     * @example aeip-2zeerraiwb7ujsxdc****
     *
     * @var string
     */
    public $anycastId;

    /**
     * @description The ID of the endpoint from which you want to disassociate the Anycast EIP.
     *
     * @example lb-2zebb08phyczzawe****
     *
     * @var string
     */
    public $bindInstanceId;

    /**
     * @description The region where the endpoint is deployed.
     *
     * @example us-west-1
     *
     * @var string
     */
    public $bindInstanceRegionId;

    /**
     * @description The type of endpoint from which you want to disassociate the Anycast EIP. Valid values:
     *
     *   **SlbInstance**: an internal-facing Server Load Balancer (SLB) instance that is deployed in a virtual private cloud (VPC)
     *   **NetworkInterface**: elastic network interface (ENI)
     *
     * @example SlbInstance
     *
     * @var string
     */
    public $bindInstanceType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var string
     */
    public $dryRun;

    /**
     * @description The secondary private IP address of the ENI from which you want to disassociate the Anycast EIP.
     *
     * This parameter is valid only when you set **BindInstanceType** to **NetworkInterface**. If you do not specify this parameter, the primary private IP address of the ENI is used.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'anycastId'            => 'AnycastId',
        'bindInstanceId'       => 'BindInstanceId',
        'bindInstanceRegionId' => 'BindInstanceRegionId',
        'bindInstanceType'     => 'BindInstanceType',
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'privateIpAddress'     => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->bindInstanceRegionId) {
            $res['BindInstanceRegionId'] = $this->bindInstanceRegionId;
        }
        if (null !== $this->bindInstanceType) {
            $res['BindInstanceType'] = $this->bindInstanceType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnassociateAnycastEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['BindInstanceRegionId'])) {
            $model->bindInstanceRegionId = $map['BindInstanceRegionId'];
        }
        if (isset($map['BindInstanceType'])) {
            $model->bindInstanceType = $map['BindInstanceType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}
