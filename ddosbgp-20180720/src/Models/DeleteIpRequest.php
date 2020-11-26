<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DeleteIpRequest extends Model
{
    /**
     * @var string
     */
    public $ipList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipList'          => 'IpList',
        'instanceId'      => 'InstanceId',
        'resourceGroupId' => 'ResourceGroupId',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('ipList', $this->ipList, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
