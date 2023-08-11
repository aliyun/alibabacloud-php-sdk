<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribePackIpListRequest extends Model
{
    /**
     * @description The ID of the resource group to which the Anti-DDoS Origin instance belongs in Resource Management.
     *
     * If you do not specify this parameter, the instance belongs to the default resource group.
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page to return.
     *
     * @example 47.98.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @description The operation that you want to perform. Set the value to **DescribePackIpList**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The type of the cloud asset to which the protected IP address to query belongs. Valid values:
     *
     *   **ECS**: an Elastic Compute Service (ECS) instance.
     *   **SLB**: a Classic Load Balancer (CLB) instance, originally called a Server Load Balancer (SLB) instance.
     *   **EIP**: an elastic IP address (EIP). An Internet-facing Application Load Balancer (ALB) instance uses an EIP. If the IP address belongs to the Internet-facing ALB instance, set this parameter to EIP.
     *   **WAF**: a Web Application Firewall (WAF) instance.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The protected IP address to query.
     *
     * @example ECS
     *
     * @var string
     */
    public $productName;

    /**
     * @description The list of IP addresses that are protected by the Anti-DDoS Origin instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the cloud asset to which the IP address belongs. Valid values:
     *
     *   **ECS**: an ECS instance.
     *   **SLB**: an CLB instance.
     *   **EIP**: an EIP. If the IP address belongs to an ALB instance, the value EIP is returned.
     *   **WAF**: a WAF instance.
     *
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'ip'              => 'Ip',
        'memberUid'       => 'MemberUid',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'productName'     => 'ProductName',
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
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
     * @return DescribePackIpListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
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
