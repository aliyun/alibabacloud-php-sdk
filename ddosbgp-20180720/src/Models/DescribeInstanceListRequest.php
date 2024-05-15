<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInstanceListRequest extends Model
{
    /**
     * @description The IDs of the Anti-DDoS Origin instances to query. Specify the value is in the `["<Instance ID 1>","<Instance ID 2>",……]` format.
     *
     * @example ["ddosbgp-cn-oew1pjrk****"]
     *
     * @var string
     */
    public $instanceIdList;

    /**
     * @description The mitigation plan of the Anti-DDoS Origin instance to query. Valid values:
     *
     *   **0**: the Professional mitigation plan
     *   **1**: the Enterprise mitigation plan
     *
     * @example 0
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var string[]
     */
    public $instanceTypeList;

    /**
     * @description The IP address of the object that is protected by the Anti-DDoS Origin instance to query.
     *
     * @example 47.89.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The protocol type of the IP address asset that is protected by the Anti-DDoS Origin instance to query. Valid values:
     *
     *   **Ipv4**: IPv4
     *   **Ipv6**: IPv6
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The field that is used to sort the Anti-DDoS Origin instances. Set the value to **expireTime**, which indicates that the instances are sorted based on the expiration time.
     *
     * You can set the **Orderdire** parameter to specify the sorting method.
     * @example expireTime
     *
     * @var string
     */
    public $orderby;

    /**
     * @description The sorting method. Valid values:
     *
     *   **desc**: the descending order. This is the default value.
     *   **asc**: the ascending order.
     *
     * @example desc
     *
     * @var string
     */
    public $orderdire;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region where the Anti-DDoS Origin instance to query resides.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/118703.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remarks of the Anti-DDoS Origin instance to query. Fuzzy match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the resource group to which the Anti-DDoS Origin instance belongs in Resource Management.
     *
     * If you do not specify this parameter, the instance belongs to the default resource group.
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'instanceIdList'   => 'InstanceIdList',
        'instanceType'     => 'InstanceType',
        'instanceTypeList' => 'InstanceTypeList',
        'ip'               => 'Ip',
        'ipVersion'        => 'IpVersion',
        'orderby'          => 'Orderby',
        'orderdire'        => 'Orderdire',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
        'remark'           => 'Remark',
        'resourceGroupId'  => 'ResourceGroupId',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeList) {
            $res['InstanceTypeList'] = $this->instanceTypeList;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->orderby) {
            $res['Orderby'] = $this->orderby;
        }
        if (null !== $this->orderdire) {
            $res['Orderdire'] = $this->orderdire;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdList'])) {
            $model->instanceIdList = $map['InstanceIdList'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeList'])) {
            if (!empty($map['InstanceTypeList'])) {
                $model->instanceTypeList = $map['InstanceTypeList'];
            }
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Orderby'])) {
            $model->orderby = $map['Orderby'];
        }
        if (isset($map['Orderdire'])) {
            $model->orderdire = $map['Orderdire'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
