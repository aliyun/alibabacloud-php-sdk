<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListVccsRequest extends Model
{
    /**
     * @description The peak bandwidth of the Lingjun connection instance. Unit: Mbit/s. Valid values: 1000 to 400000
     *
     * @example 5000
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the CEN instance; [What is the CEN?](https://help.aliyun.com/document_detail/181681.html)
     *
     * You can call the [DescribeCens](https://help.aliyun.com/document_detail/468215.htm) to query the information of CEN instances under the current Alibaba Cloud account.
     * @example cen-95iwtpyvj3kk1v0ao0
     *
     * @var string
     */
    public $cenId;

    /**
     * @description Specifies whether to enable paged query. Optional values:
     *
     *   **true**: Enable pagination query
     *   **false**: Pagination query is disabled
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description Excludes all data in the specified status. If the status parameter exists, ExStatus does not take effect.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $exStatus;

    /**
     * @description Filter queries by Lingjun HUB instance ID
     *
     * @example er-a7rqv1rq
     *
     * @var string
     */
    public $filterErId;

    /**
     * @description The page number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu).
     * @example rg-aeky5f3qx6ceapq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The instance status.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag information.
     *
     * You can specify up to 20 tags.
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the Lingjun connection instance.
     *
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @description Virtual Private Cloud IDs; [What is Virtual Private Cloud](https://help.aliyun.com/document_detail/34217.html)
     *
     * You can call the [DescribeVpcs](https://help.aliyun.com/document_detail/35739.html#demo-0) operation to query the specified VPC.
     * @example vpc-bp1nrtkmamy329u6a1z0i
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Lingjun CIDR block instance ID
     *
     * @example vpd-omqutbff
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'bandwidth'       => 'Bandwidth',
        'cenId'           => 'CenId',
        'enablePage'      => 'EnablePage',
        'exStatus'        => 'ExStatus',
        'filterErId'      => 'FilterErId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'tag'             => 'Tag',
        'vccId'           => 'VccId',
        'vpcId'           => 'VpcId',
        'vpdId'           => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->exStatus) {
            $res['ExStatus'] = $this->exStatus;
        }
        if (null !== $this->filterErId) {
            $res['FilterErId'] = $this->filterErId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVccsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['ExStatus'])) {
            $model->exStatus = $map['ExStatus'];
        }
        if (isset($map['FilterErId'])) {
            $model->filterErId = $map['FilterErId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
