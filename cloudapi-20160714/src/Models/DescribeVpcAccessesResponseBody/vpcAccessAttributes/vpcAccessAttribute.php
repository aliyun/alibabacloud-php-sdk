<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponseBody\vpcAccessAttributes;

use AlibabaCloud\Tea\Model;

class vpcAccessAttribute extends Model
{
    /**
     * @description The time when the authorization was created.
     *
     * @example 2017-01-30T04:10:19Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the VPC authorization.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of an ECS or SLB instance in the VPC.
     *
     * @example i-uf6bzcg1pr4oh5jjmxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the authorization.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The port number that corresponds to the instance.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the VPC authorization.
     *
     * @example vpc-*****ssds24
     *
     * @var string
     */
    public $vpcAccessId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-uf657qec7lx42paw3qxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The host of the backend service.
     *
     * @example hos-a***.fh-**nc.com
     *
     * @var string
     */
    public $vpcTargetHostName;
    protected $_name = [
        'createdTime'       => 'CreatedTime',
        'description'       => 'Description',
        'instanceId'        => 'InstanceId',
        'name'              => 'Name',
        'port'              => 'Port',
        'regionId'          => 'RegionId',
        'vpcAccessId'       => 'VpcAccessId',
        'vpcId'             => 'VpcId',
        'vpcTargetHostName' => 'VpcTargetHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcAccessId) {
            $res['VpcAccessId'] = $this->vpcAccessId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcTargetHostName) {
            $res['VpcTargetHostName'] = $this->vpcTargetHostName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcAccessAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcAccessId'])) {
            $model->vpcAccessId = $map['VpcAccessId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcTargetHostName'])) {
            $model->vpcTargetHostName = $map['VpcTargetHostName'];
        }

        return $model;
    }
}
