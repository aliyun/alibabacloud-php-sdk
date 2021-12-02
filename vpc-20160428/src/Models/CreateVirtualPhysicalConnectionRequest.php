<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualPhysicalConnectionRequest extends Model
{
    /**
     * @description Vpconn的description
     *
     * @var string
     */
    public $description;

    /**
     * @description DryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Vpconn的name
     *
     * @var string
     */
    public $name;

    /**
     * @description vpconn的支付方
     *
     * @var string
     */
    public $orderMode;

    /**
     * @description Vpconn的主Pconn
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description vpconn规格
     *
     * @var string
     */
    public $spec;

    /**
     * @description 幂等Token
     *
     * @var string
     */
    public $token;

    /**
     * @description vpconn的VlanID
     *
     * @var int
     */
    public $vlanId;

    /**
     * @description Vpconn拥有者
     *
     * @var int
     */
    public $vpconnAliUid;
    protected $_name = [
        'description'          => 'Description',
        'dryRun'               => 'DryRun',
        'name'                 => 'Name',
        'orderMode'            => 'OrderMode',
        'physicalConnectionId' => 'PhysicalConnectionId',
        'regionId'             => 'RegionId',
        'spec'                 => 'Spec',
        'token'                => 'Token',
        'vlanId'               => 'VlanId',
        'vpconnAliUid'         => 'VpconnAliUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderMode) {
            $res['OrderMode'] = $this->orderMode;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->vpconnAliUid) {
            $res['VpconnAliUid'] = $this->vpconnAliUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualPhysicalConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderMode'])) {
            $model->orderMode = $map['OrderMode'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['VpconnAliUid'])) {
            $model->vpconnAliUid = $map['VpconnAliUid'];
        }

        return $model;
    }
}
