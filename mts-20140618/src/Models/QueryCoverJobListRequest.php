<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class QueryCoverJobListRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $coverJobIds;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var int
     */
    public $maximumPageSize;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $startOfJobCreatedTimeRange;

    /**
     * @var string
     */
    public $endOfJobCreatedTimeRange;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'                    => 'OwnerId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'coverJobIds'                => 'CoverJobIds',
        'nextPageToken'              => 'NextPageToken',
        'maximumPageSize'            => 'MaximumPageSize',
        'state'                      => 'State',
        'startOfJobCreatedTimeRange' => 'StartOfJobCreatedTimeRange',
        'endOfJobCreatedTimeRange'   => 'EndOfJobCreatedTimeRange',
        'pipelineId'                 => 'PipelineId',
        'ownerAccount'               => 'OwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->coverJobIds) {
            $res['CoverJobIds'] = $this->coverJobIds;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->maximumPageSize) {
            $res['MaximumPageSize'] = $this->maximumPageSize;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->startOfJobCreatedTimeRange) {
            $res['StartOfJobCreatedTimeRange'] = $this->startOfJobCreatedTimeRange;
        }
        if (null !== $this->endOfJobCreatedTimeRange) {
            $res['EndOfJobCreatedTimeRange'] = $this->endOfJobCreatedTimeRange;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCoverJobListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['CoverJobIds'])) {
            $model->coverJobIds = $map['CoverJobIds'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['MaximumPageSize'])) {
            $model->maximumPageSize = $map['MaximumPageSize'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StartOfJobCreatedTimeRange'])) {
            $model->startOfJobCreatedTimeRange = $map['StartOfJobCreatedTimeRange'];
        }
        if (isset($map['EndOfJobCreatedTimeRange'])) {
            $model->endOfJobCreatedTimeRange = $map['EndOfJobCreatedTimeRange'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
