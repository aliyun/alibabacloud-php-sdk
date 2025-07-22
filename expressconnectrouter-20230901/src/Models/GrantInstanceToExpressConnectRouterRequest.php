<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class GrantInstanceToExpressConnectRouterRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run.
     *   **false** (default): performs a dry run and performs the actual request.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ECR ID.
     *
     * This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The ID of the Alibaba Cloud account that owns the ECR to which you want to grant permissions.
     *
     * This parameter is required.
     *
     * @example 121012345612****
     *
     * @var int
     */
    public $ecrOwnerAliUid;

    /**
     * @description The ID of the network instance.
     *
     * This parameter is required.
     *
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the network instance.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VBR**
     *   **VPC**
     *
     * This parameter is required.
     *
     * @example VBR
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'ecrOwnerAliUid' => 'EcrOwnerAliUid',
        'instanceId' => 'InstanceId',
        'instanceRegionId' => 'InstanceRegionId',
        'instanceType' => 'InstanceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->ecrOwnerAliUid) {
            $res['EcrOwnerAliUid'] = $this->ecrOwnerAliUid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantInstanceToExpressConnectRouterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['EcrOwnerAliUid'])) {
            $model->ecrOwnerAliUid = $map['EcrOwnerAliUid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
