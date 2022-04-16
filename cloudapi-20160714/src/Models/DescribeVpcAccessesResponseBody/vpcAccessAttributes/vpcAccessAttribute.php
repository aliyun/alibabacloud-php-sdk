<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponseBody\vpcAccessAttributes;

use AlibabaCloud\Tea\Model;

class vpcAccessAttribute extends Model
{
    /**
     * @description VPC授权的创建时间
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description VPC授权的描述
     *
     * @var string
     */
    public $description;

    /**
     * @description VPC中的后端服务信息
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description VPC授权名称
     *
     * @var string
     */
    public $name;

    /**
     * @description VPC中的后端服务端口
     *
     * @var int
     */
    public $port;

    /**
     * @description 地域id
     *
     * @var string
     */
    public $regionId;

    /**
     * @description vpc授权ID
     *
     * @var string
     */
    public $vpcAccessId;

    /**
     * @description VPC的ID
     *
     * @var string
     */
    public $vpcId;

    /**
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
