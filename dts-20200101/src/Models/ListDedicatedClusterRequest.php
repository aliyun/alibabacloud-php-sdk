<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ListDedicatedClusterRequest extends Model
{
    /**
     * @description The basis on which the retrieved entries are sorted if multiple DTS dedicated clusters are returned. Valid values:
     *
     *   **gmtCreated**: the time when a cluster was created.
     *   **orderCount**: the number of nodes in a cluster.
     *
     * @example gmtCreated
     *
     * @var string
     */
    public $orderColumn;

    /**
     * @description The order in which you want to sort the retrieved entries. Valid values:
     *
     *   asc: sorts the retrieved entries in ascending order. This is the default value.
     *   desc: sorts the retrieved entries in descending order.
     *
     * @example asc
     *
     * @var string
     */
    public $orderDirection;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value of this parameter must be an integer that is greater than 0. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of clusters to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The content of the query condition.
     *
     * >  You must set the **Type parameter** to specify the type of the query condition.
     * @example dtspk3f13r731m****
     *
     * @var string
     */
    public $params;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   **init**: The cluster is being initialized.
     *   **schedule**: The cluster is pending scheduling.
     *   **running**: The cluster is running.
     *   **upgrade**: The cluster is being upgraded.
     *   **downgrade**: The cluster is being downgraded.
     *   **locked**: The cluster is locked.
     *   **releasing**: The cluster is being released.
     *   **released**: The cluster is released.
     *
     * @example init
     *
     * @var string
     */
    public $state;

    /**
     * @description The type of the query condition. Valid values:
     *
     *   **NAME**: the name of the cluster.
     *   **INSTANCE**: the ID of a cluster instance.
     *   **DEDICAETEDCLUSTERID**: the ID of a dedicated cluster.
     *
     * >  You must specify the query condition by using the **Params** parameter.
     * @example NAME
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'orderColumn'     => 'OrderColumn',
        'orderDirection'  => 'OrderDirection',
        'ownerId'         => 'OwnerId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'params'          => 'Params',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'state'           => 'State',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderColumn) {
            $res['OrderColumn'] = $this->orderColumn;
        }
        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDedicatedClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderColumn'])) {
            $model->orderColumn = $map['OrderColumn'];
        }
        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
