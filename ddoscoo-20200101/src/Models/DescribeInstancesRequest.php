<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
{
    /**
     * @description The mitigation plan of the instance to query. Valid values:
     *
     *   **0**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Insurance mitigation plan
     *   **1**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Unlimited mitigation plan
     *   **2**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Chinese Mainland Acceleration (CMA) mitigation plan
     *   **9**: Anti-DDoS Proxy (Chinese Mainland) instance of the Profession mitigation plan
     *
     * @example 9
     *
     * @var int
     */
    public $edition;

    /**
     * @description The traffic forwarding status of the instance to query. Valid values:
     *
     *   **0**: The instance no longer forwards service traffic.
     *   **1**: The instance forwards service traffic as expected.
     *
     * @example 1
     *
     * @var int
     */
    public $enabled;

    /**
     * @description The end of the time range to query. Instances whose expiration time is earlier than the point in time are queried. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1640361700000
     *
     * @var int
     */
    public $expireEndTime;

    /**
     * @description The beginning of the time range to query. Instances whose expiration time is later than the point in time are queried. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1640361500000
     *
     * @var int
     */
    public $expireStartTime;

    /**
     * @description The IDs of the instances to query. You can specify up to 200 instance IDs.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The IP address of the instance to query.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * This parameter is required.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The remarks of the instance to query. Fuzzy match is supported.
     *
     * @example doc-test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management.
     *
     * If you do not specify this parameter, the instance belongs to the default resource group.
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The states of the instances to query. You can specify up to two states.
     *
     * @var int[]
     */
    public $status;

    /**
     * @description The tags that are added to the instances to query.
     *
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
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'remark'          => 'Remark',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
