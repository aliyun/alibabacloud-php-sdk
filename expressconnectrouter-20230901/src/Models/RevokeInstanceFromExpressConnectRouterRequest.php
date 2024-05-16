<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class RevokeInstanceFromExpressConnectRouterRequest extends Model
{
    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description This parameter is required.
     *
     * @example 121012345612****
     *
     * @var int
     */
    public $ecrOwnerAliUid;

    /**
     * @description This parameter is required.
     *
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @description This parameter is required.
     *
     * @example VBR
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'dryRun'           => 'DryRun',
        'ecrId'            => 'EcrId',
        'ecrOwnerAliUid'   => 'EcrOwnerAliUid',
        'instanceId'       => 'InstanceId',
        'instanceRegionId' => 'InstanceRegionId',
        'instanceType'     => 'InstanceType',
    ];

    public function validate()
    {
    }

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
     * @return RevokeInstanceFromExpressConnectRouterRequest
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
