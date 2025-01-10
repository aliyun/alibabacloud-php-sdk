<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class CreateElasticNetworkInterfaceRequest extends Model
{
    /**
     * @description The POP API is not ignored by default and is used for idempotence.
     *
     * @example 3fd79d62-ab1d-11ec-9a53-0242ac110004
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the response code.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description Whether to enable the jumbo frame capability
     *
     * @example True
     *
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @description The ID of the Lingjun node.
     *
     * @example e01-cn-lbj3aej****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security group.
     *
     * @example sg-wz9fj2s3o21nw2****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-t4nahb0pxck****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * >  If the NodeId parameter is empty, the VpcId parameter is required. If the NodeId parameter is not empty, the VpcId parameter is optional.
     * @example vpc-uf6aa4ddo97fr****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'description'      => 'Description',
        'enableJumboFrame' => 'EnableJumboFrame',
        'nodeId'           => 'NodeId',
        'regionId'         => 'RegionId',
        'securityGroupId'  => 'SecurityGroupId',
        'vSwitchId'        => 'VSwitchId',
        'vpcId'            => 'VpcId',
        'zoneId'           => 'ZoneId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateElasticNetworkInterfaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
