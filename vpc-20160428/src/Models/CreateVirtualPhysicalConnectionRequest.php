<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVirtualPhysicalConnectionRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateVirtualPhysicalConnectionRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The region ID of the hosted connection.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to obtain the region ID.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to check the request without performing the operation. Valid values:
     *
     *   **true**: checks the request without performing the operation. The hosted connection is not created. The system checks the required parameters, request syntax, and instance status. If the request fails the check, an error message is returned. If the request passes the check, `DRYRUN.SUCCESS` is returned.
     *   **false**: sends the request. If the request passes the check, the hosted connection is created. This is the default value.
     *
     * @example nametest
     *
     * @var string
     */
    public $name;

    /**
     * @description The bandwidth value of the hosted connection.
     *
     * Valid values: **50M**, **100M**, **200M**, **300M**, **400M**, **500M**, **1G**, **2G**, **5G**, **8G**, and **10G**.
     *
     * >  By default, the values of **2G**, **5G**, **8G**, and **10G** are unavailable. If you want to specify these values, contact your customer manager.
     *
     **M** indicates Mbit/s, and **G** indicates Gbit/s.
     *
     * @example PayByVirtualPhysicalConnectionOwner
     *
     * @var string
     */
    public $orderMode;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that the value is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system automatically sets **ClientToken** to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example pc-bp1ciz7ekd2grn1as****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The ID of the hosted connection.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aekzjty2chzuqky
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the Express Connect circuit over which the hosted connection is created.
     *
     * @example 50M
     *
     * @var string
     */
    public $spec;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The description of the hosted connection.
     *
     * The description must be 2 to 256 characters in length. The description must start with a letter but cannot start with `http://` or `https://`.
     * @example CBCE910E-D396-4944-8****
     *
     * @var string
     */
    public $token;

    /**
     * @description The Alibaba Cloud account ID of the tenant.
     *
     * @example 4
     *
     * @var int
     */
    public $vlanId;

    /**
     * @description The name of the hosted connection.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
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
