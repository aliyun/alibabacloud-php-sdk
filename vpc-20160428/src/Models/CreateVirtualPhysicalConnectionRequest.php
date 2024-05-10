<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualPhysicalConnectionRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateVirtualPhysicalConnectionRequest extends Model
{
    /**
     * @description The description of the hosted connection.
     *
     * The description must be 2 to 256 characters in length. The description must start with a letter but cannot start with `http://` or `https://`.
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform a dry run, without performing the actual request. Default value: 45104. Valid values:
     *
     *   **true**: performs a dry run. The system checks the request for potential issues, including required parameters, request syntax, and instance status. If the request fails the dry run, an error code is returned. If the request passes the dry run, `DRYRUN.SUCCESS` is returned.
     *   **false**: performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The name of the hosted connection.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The payer for the hosted connection. Valid values:
     *
     *   **PayByPhysicalConnectionOwner**: The partner pays for the hosted connection.
     *   **PayByVirtualPhysicalConnectionOwner**: The tenant pays for the hosted connection.
     *
     * This parameter is required.
     * @example PayByVirtualPhysicalConnectionOwner
     *
     * @var string
     */
    public $orderMode;

    /**
     * @description The ID of the Express Connect circuit over which the hosted connection is created.
     *
     * This parameter is required.
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The region ID of the hosted connection.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the hosted connection belongs.
     *
     * @example rg-aekzjty2chzuqky
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The bandwidth value of the hosted connection.
     *
     * Valid values: **50M**, **100M**, **200M**, **300M**, **400M**, **500M**, **1G**, **2G**, **5G**, **8G**, and **10G**.
     *
     * >  **2G**, **5G**, **8G**, and **10G** are unavailable by default. If you want to use these bandwidth values, contact your account manager.
     *
     **M** indicates Mbit/s and **G** indicates Gbit/s.
     *
     * This parameter is required.
     * @example 50M
     *
     * @var string
     */
    public $spec;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example CBCE910E-D396-4944-8****
     *
     * @var string
     */
    public $token;

    /**
     * @description The virtual local area network (VLAN) ID of the hosted connection. Valid values: **0** to **2999**.
     *
     *   If the VLAN ID is set to **0**, it indicates that the switch port of the virtual border router (VBR) is a Layer 3 router interface instead of a VLAN interface. When a Layer 3 router interface is used, each Express Connect circuit corresponds to a VBR.
     *   If the VLAN ID is set to a value from **1** to **2999**, the switch port of the VBR is a Layer 3 VLAN subinterface. When a Layer 3 VLAN subinterface is used, each VLAN ID corresponds to one VBR. In this case, the Express Connect circuit with which the VBR is associated can be used to connect to virtual private clouds (VPCs) that belong to different Alibaba Cloud accounts. VBRs in different VLANs are isolated from each other at Layer 2.
     *
     * This parameter is required.
     * @example 4
     *
     * @var int
     */
    public $vlanId;

    /**
     * @description The Alibaba Cloud account ID of the tenant.
     *
     * This parameter is required.
     * @example 1210123456123456
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
        'resourceGroupId'      => 'ResourceGroupId',
        'spec'                 => 'Spec',
        'tag'                  => 'Tag',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
