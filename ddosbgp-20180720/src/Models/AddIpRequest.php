<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class AddIpRequest extends Model
{
    /**
     * @description The ID of the Anti-DDoS Origin instance.
     *
     * This parameter is required.
     * @example ddosbgp-cn-npk1z7t9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP addresses that you want to add to the Anti-DDoS Origin instance. This parameter is a string that consists of JSON arrays. Each element in a JSON array is a JSON struct that includes the following field:
     *
     *   **ip**: required. The IP address that you want to add. Data type: string.
     *
     **
     *
     **Note** The IP address must be the IP address of an asset that belongs to the current Alibaba Cloud account.
     *
     * This parameter is required.
     * @example [{"ip":"1.XX.XX.1"},{"ip":"2.XX.XX.2"}]
     *
     * @var string
     */
    public $ipList;

    /**
     * @description The ID of the region where the Anti-DDoS Origin instance resides.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/118703.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the Anti-DDoS Origin instance belongs in Resource Management. This parameter is empty by default, which indicates that the Anti-DDoS Origin instance belongs to the default resource group.
     *
     * For information about resource groups, see [Create a resource group](https://help.aliyun.com/document_detail/94485.html).
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'ipList'          => 'IpList',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
