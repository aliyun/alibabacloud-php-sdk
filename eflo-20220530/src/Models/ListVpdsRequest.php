<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListVpdsRequest extends Model
{
    /**
     * @description Specifies whether to enable paged query.
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description Queries the network segments of Lingjun that are not bound to a specified Lingjun HUB.
     *
     * @example er-kkopgtne
     *
     * @var string
     */
    public $filterErId;

    /**
     * @description If you select a drop-down list, only the basic information (including the instance ID and instance name) is returned. Possible values:
     *
     *   **true**: Select Query Use from the drop-down list.
     *   **false**: Normal queries are used.
     *
     * @example true
     *
     * @var bool
     */
    public $forSelect;

    /**
     * @description The page number of the page to return. Start value: 1 Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
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
     *   **Available**: Normal.
     *   **Not Available**: Not available.
     *   **Executing**: The task is being executed.
     *   **Deleting**: The account is being deleted
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
     * @description The ID of the VPD instance.
     *
     * @example vpd-fuliephf
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The name of the VPD instance.
     *
     * @example vpd-1
     *
     * @var string
     */
    public $vpdName;

    /**
     * @description Specifies whether to include the dependent resource information. We recommend that you do not query the dependent resource information when you query by page. You can query the dependent resource information separately when you delete it. Possible values:
     *
     *   **true**: with dependency information.
     *   **false**: does not include dependency information.
     *
     * @example false
     *
     * @var bool
     */
    public $withDependence;

    /**
     * @description Queries the information about a Lingjun CIDR block that is not bound to a Lingjun connection. Possible values:
     *
     *   **true**: filters out VPDs that have been bound to VCC
     *   **false**: does not filter VPD that has been bound to VCC
     *
     * @example true
     *
     * @var bool
     */
    public $withoutVcc;
    protected $_name = [
        'enablePage'      => 'EnablePage',
        'filterErId'      => 'FilterErId',
        'forSelect'       => 'ForSelect',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'tag'             => 'Tag',
        'vpdId'           => 'VpdId',
        'vpdName'         => 'VpdName',
        'withDependence'  => 'WithDependence',
        'withoutVcc'      => 'WithoutVcc',
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
        if (null !== $this->filterErId) {
            $res['FilterErId'] = $this->filterErId;
        }
        if (null !== $this->forSelect) {
            $res['ForSelect'] = $this->forSelect;
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
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
        }
        if (null !== $this->withDependence) {
            $res['WithDependence'] = $this->withDependence;
        }
        if (null !== $this->withoutVcc) {
            $res['WithoutVcc'] = $this->withoutVcc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['FilterErId'])) {
            $model->filterErId = $map['FilterErId'];
        }
        if (isset($map['ForSelect'])) {
            $model->forSelect = $map['ForSelect'];
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
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }
        if (isset($map['WithDependence'])) {
            $model->withDependence = $map['WithDependence'];
        }
        if (isset($map['WithoutVcc'])) {
            $model->withoutVcc = $map['WithoutVcc'];
        }

        return $model;
    }
}
