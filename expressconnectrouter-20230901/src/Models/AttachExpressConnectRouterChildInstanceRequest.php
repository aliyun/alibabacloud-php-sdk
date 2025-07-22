<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class AttachExpressConnectRouterChildInstanceRequest extends Model
{
    /**
     * @description The VBR ID.
     *
     * This parameter is required.
     *
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * >  If you want to connect to a network instance that belongs to a different account, this parameter is required.
     *
     * @example 190550144868****
     *
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @description The region ID of the VBR.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description The type of the network instance. Set the value to **VBR**.
     *
     * This parameter is required.
     *
     * @example VBR
     *
     * @var string
     */
    public $childInstanceType;

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
     * @description The description of the sub-instance. It must be 0 to 128 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $description;

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
     * @example ecr-a5xqrgbeidz1w8****
     *
     * @var string
     */
    public $ecrId;
    protected $_name = [
        'childInstanceId' => 'ChildInstanceId',
        'childInstanceOwnerId' => 'ChildInstanceOwnerId',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
        'childInstanceType' => 'ChildInstanceType',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->childInstanceOwnerId) {
            $res['ChildInstanceOwnerId'] = $this->childInstanceOwnerId;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachExpressConnectRouterChildInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['ChildInstanceOwnerId'])) {
            $model->childInstanceOwnerId = $map['ChildInstanceOwnerId'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }

        return $model;
    }
}
