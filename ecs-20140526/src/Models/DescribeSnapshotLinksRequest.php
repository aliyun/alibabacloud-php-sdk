<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotLinksRequest extends Model
{
    /**
     * @description The disk IDs. You can specify a JSON array that contains a maximum of 100 disk IDs. Separate the disk IDs with commas (,).
     *
     * @example ["d-bp1d6tsvznfghy7y****", "d-bp1ippxbaql9zet7****", … "d-bp1ib7bcz07lcxa9****"]
     *
     * @var string
     */
    public $diskIds;

    /**
     * @description The instance ID.
     *
     * @example i-bp1h6jmbefj2cyqs****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum number of entries per page. Maximum value: 100. Default value:
     *
     *   If you do not specify this parameter or if you set a value smaller than 10, the default value is 10.
     *   If you set a value greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
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
     * @description The page number. Pages start from page 1.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * Default value: 10.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the disk. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The snapshot chain IDs. You can specify a JSON array that contains a maximum of 100 snapshot chain IDs. Separate the snapshot chain IDs with commas (,).
     *
     * @example ["sl-bp1grgphbcc9brb5****", "sl-bp1c4izumvq0i5bs****", … "sl-bp1akk7isz866dds****"]
     *
     * @var string
     */
    public $snapshotLinkIds;
    protected $_name = [
        'diskIds' => 'DiskIds',
        'instanceId' => 'InstanceId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'snapshotLinkIds' => 'SnapshotLinkIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->snapshotLinkIds) {
            $res['SnapshotLinkIds'] = $this->snapshotLinkIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotLinksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskIds'])) {
            $model->diskIds = $map['DiskIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SnapshotLinkIds'])) {
            $model->snapshotLinkIds = $map['SnapshotLinkIds'];
        }

        return $model;
    }
}
