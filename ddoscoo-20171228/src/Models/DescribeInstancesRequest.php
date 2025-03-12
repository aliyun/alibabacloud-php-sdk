<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
{
    /**
     * @example 9
     *
     * @var int
     */
    public $edition;

    /**
     * @example 1
     *
     * @var int
     */
    public $enabled;

    /**
     * @example 1578931200000
     *
     * @var int
     */
    public $expireEndTime;

    /**
     * @example 1578931200000
     *
     * @var int
     */
    public $expireStartTime;

    /**
     * @example ["ddoscoo-cn-XXXXX"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example testRemark
     *
     * @var string
     */
    public $remark;

    /**
     * @example xx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example 1
     *
     * @var int[]
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'edition'         => 'Edition',
        'enabled'         => 'Enabled',
        'expireEndTime'   => 'ExpireEndTime',
        'expireStartTime' => 'ExpireStartTime',
        'instanceIds'     => 'InstanceIds',
        'ip'              => 'Ip',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'remark'          => 'Remark',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceIp'        => 'SourceIp',
        'status'          => 'Status',
        'tag'             => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->expireEndTime) {
            $res['ExpireEndTime'] = $this->expireEndTime;
        }
        if (null !== $this->expireStartTime) {
            $res['ExpireStartTime'] = $this->expireStartTime;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return DescribeInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ExpireEndTime'])) {
            $model->expireEndTime = $map['ExpireEndTime'];
        }
        if (isset($map['ExpireStartTime'])) {
            $model->expireStartTime = $map['ExpireStartTime'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
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
