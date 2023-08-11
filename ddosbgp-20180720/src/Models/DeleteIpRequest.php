<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DeleteIpRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ddosbgp-cn-npk1z7t9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the Anti-DDoS Origin Enterprise instance.
     *
     * >  You can call the [DescribeRegions](~~118703~~) operation to query all regions supported by Anti-DDoS Origin.
     * @example [{"ip":"1.XX.XX.1"},{"ip":"2.XX.XX.2"}]
     *
     * @var string
     */
    public $ipList;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Anti-DDoS Origin Enterprise instance no longer protects the IP addresses that are removed.
     *
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
     * @return DeleteIpRequest
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
