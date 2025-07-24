<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostsRequest extends Model
{
    /**
     * @description The ID of the dedicated host cluster.
     *
     * @example dc-bp12wlf6am0vz9v2****
     *
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @description The list of DDH IDs. You can specify up to 100 deployment set IDs in each request. Separate the deployment set IDs with commas (,).
     *
     * @example ["dh-bp165p6xk2tlw61e****", "dh-bp1f9vxmno7emy96****"]
     *
     * @var string
     */
    public $dedicatedHostIds;

    /**
     * @description The name of the dedicated host.
     *
     * @example MyDDHTestName
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description The type of the DDH. You can call the [DescribeDedicatedHostTypes](https://help.aliyun.com/document_detail/134240.html) operation to query the most recent list of DDH types.
     *
     * @example ddh.g5
     *
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @description The reason why the dedicated host is locked. Valid values:
     *
     *   financial: The dedicated host is locked due to overdue payments.
     *   security: The dedicated host is locked due to security reasons.
     *
     * @example financial
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The maximum number of entries per page. If you specify this parameter, both MaxResults and NextToken are used for a paged query.
     *
     * Valid values: 1 to 100.
     *
     * Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example e71d8a535bd9cc11
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description >  This parameter will be removed in the future. You can use NextToken and MaxResults for a paged query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description >  This parameter will be removed in the future. You can use NextToken and MaxResults for a paged query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $queryInventory;

    /**
     * @description The region ID of the dedicated host. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the dedicated host belongs. When this parameter is specified to query resources, up to 1,000 resources that belong to the specified resource group can be displayed in the response.
     *
     * > Resources in the default resource group are displayed in the response regardless of how this parameter is set.
     *
     * @example rg-aek3b6jzp66****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to display socket information. You can view the remaining resources (vCPUs, memory usage, remaining resources, and total resources) based on the capacity information of the socket dimension. Then you can determine whether ECS instances of the corresponding specifications can be created. Valid values:
     *
     *   true Only some DDHs support the information about resources in the socket dimension. For more information, see [View and export information about DDHs](https://help.aliyun.com/document_detail/68989.html).
     *   false
     *
     * >  Each DDH generally has two CPUs, and each CPU corresponds to Socket 0 and Socket 1. To maximize the performance of an ECS instance on a DDH, ECS instances are not created across sockets.
     *
     *   If one socket has available computing resources for creating the ECS instance, creation succeeds.
     *
     *   If not, creation fails even if the combined available resources of both sockets are sufficient. Although the remaining resources of the two sockets on the DDH are larger than the ECS instance type, the ECS instance cannot be created.
     *
     * @example true
     *
     * @var string
     */
    public $socketDetails;

    /**
     * @description The service state of the dedicated host. Valid values:
     *
     *   Available: The dedicated host is running normally.
     *   UnderAssessment: The dedicated host is available but has potential risks that may cause the ECS instances on the dedicated host to fail.
     *   PermanentFailure: The dedicated host encounters permanent failures and is unavailable.
     *   TempUnavailable: The dedicated host is temporarily unavailable.
     *   Redeploying: The dedicated host is being restored.
     *
     * Default value: Available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of tags. The list length ranges from 0 to 20.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The zone ID of the dedicated host. You can call the [DescribeZones](https://help.aliyun.com/document_detail/25610.html) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'dedicatedHostIds' => 'DedicatedHostIds',
        'dedicatedHostName' => 'DedicatedHostName',
        'dedicatedHostType' => 'DedicatedHostType',
        'lockReason' => 'LockReason',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryInventory' => 'QueryInventory',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'socketDetails' => 'SocketDetails',
        'status' => 'Status',
        'tag' => 'Tag',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }
        if (null !== $this->dedicatedHostIds) {
            $res['DedicatedHostIds'] = $this->dedicatedHostIds;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
        if (null !== $this->queryInventory) {
            $res['QueryInventory'] = $this->queryInventory;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->socketDetails) {
            $res['SocketDetails'] = $this->socketDetails;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }
        if (isset($map['DedicatedHostIds'])) {
            $model->dedicatedHostIds = $map['DedicatedHostIds'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
        if (isset($map['QueryInventory'])) {
            $model->queryInventory = $map['QueryInventory'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SocketDetails'])) {
            $model->socketDetails = $map['SocketDetails'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
