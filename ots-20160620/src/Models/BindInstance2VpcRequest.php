<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models;

use AlibabaCloud\Tea\Model;

class BindInstance2VpcRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceVpcName;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $virtualSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceName'    => 'InstanceName',
        'instanceVpcName' => 'InstanceVpcName',
        'network'         => 'Network',
        'regionNo'        => 'RegionNo',
        'resourceOwnerId' => 'ResourceOwnerId',
        'virtualSwitchId' => 'VirtualSwitchId',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceVpcName) {
            $res['InstanceVpcName'] = $this->instanceVpcName;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->virtualSwitchId) {
            $res['VirtualSwitchId'] = $this->virtualSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindInstance2VpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceVpcName'])) {
            $model->instanceVpcName = $map['InstanceVpcName'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VirtualSwitchId'])) {
            $model->virtualSwitchId = $map['VirtualSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
