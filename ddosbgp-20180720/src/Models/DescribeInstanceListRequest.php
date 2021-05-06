<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInstanceListRequest extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $instanceIdList;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $orderby;

    /**
     * @var string
     */
    public $orderdire;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'instanceIdList'  => 'InstanceIdList',
        'remark'          => 'Remark',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'ipVersion'       => 'IpVersion',
        'instanceType'    => 'InstanceType',
        'ip'              => 'Ip',
        'orderby'         => 'Orderby',
        'orderdire'       => 'Orderdire',
        'regionId'        => 'RegionId',
        'tag'             => 'Tag',
    ];

    public function validate()
    {
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->orderby) {
            $res['Orderby'] = $this->orderby;
        }
        if (null !== $this->orderdire) {
            $res['Orderdire'] = $this->orderdire;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['InstanceIdList'])) {
            $model->instanceIdList = $map['InstanceIdList'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Orderby'])) {
            $model->orderby = $map['Orderby'];
        }
        if (isset($map['Orderdire'])) {
            $model->orderdire = $map['Orderdire'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
