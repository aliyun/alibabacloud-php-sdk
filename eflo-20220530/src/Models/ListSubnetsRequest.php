<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListSubnetsRequest extends Model
{
    /**
     * @description Specifies whether to query by page. Optional values:
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
     * @description The number of the page to return. The value must be greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the disk.
     *
     * This parameter is required.
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
     * @description The status of the CLB instance. Valid values:
     *
     *   **Available**: Normal
     *   **Not Available**: Unavailable
     *   **Executing**: Executing
     *   **Deleting**: The node is being deleted.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description Lingjun subnet instance ID
     *
     * @example subnet-anhtskts
     *
     * @var string
     */
    public $subnetId;

    /**
     * @description Lingjun subnet instance name
     *
     * @example subnet-1
     *
     * @var string
     */
    public $subnetName;

    /**
     * @description The tag information.
     *
     * You can specify up to 20 tags.
     * @var tag[]
     */
    public $tag;

    /**
     * @description Lingjun Subnet Usage Type; optional; optional. Valid values:
     *
     *   **If you do not set this field for a common type**
     *   **OOB** :OOB type
     *   **LB**: LB type
     *
     * @example Null
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the Lingjun CIDR block.
     *
     * @example vpd-fuliephf
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The zone ID of the disk.
     *
     * @example cn-wulanchabu-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'enablePage'      => 'EnablePage',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'subnetId'        => 'SubnetId',
        'subnetName'      => 'SubnetName',
        'tag'             => 'Tag',
        'type'            => 'Type',
        'vpdId'           => 'VpdId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
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
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->subnetName) {
            $res['SubnetName'] = $this->subnetName;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubnetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
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
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['SubnetName'])) {
            $model->subnetName = $map['SubnetName'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
