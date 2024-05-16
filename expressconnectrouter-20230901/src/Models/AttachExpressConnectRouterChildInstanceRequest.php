<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class AttachExpressConnectRouterChildInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @example 190550144868****
     *
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description This parameter is required.
     *
     * @example VBR
     *
     * @var string
     */
    public $childInstanceType;

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
     * @example ecr-a5xqrgbeidz1w8****
     *
     * @var string
     */
    public $ecrId;
    protected $_name = [
        'childInstanceId'       => 'ChildInstanceId',
        'childInstanceOwnerId'  => 'ChildInstanceOwnerId',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
        'childInstanceType'     => 'ChildInstanceType',
        'clientToken'           => 'ClientToken',
        'dryRun'                => 'DryRun',
        'ecrId'                 => 'EcrId',
    ];

    public function validate()
    {
    }

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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }

        return $model;
    }
}
