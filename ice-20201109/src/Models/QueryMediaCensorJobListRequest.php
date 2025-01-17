<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class QueryMediaCensorJobListRequest extends Model
{
    /**
     * @var string
     */
    public $endOfJobCreatedTimeRange;
    /**
     * @var string
     */
    public $jobIds;
    /**
     * @var int
     */
    public $maximumPageSize;
    /**
     * @var string
     */
    public $nextPageToken;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $pipelineId;
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
    public $startOfJobCreatedTimeRange;
    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'endOfJobCreatedTimeRange'   => 'EndOfJobCreatedTimeRange',
        'jobIds'                     => 'JobIds',
        'maximumPageSize'            => 'MaximumPageSize',
        'nextPageToken'              => 'NextPageToken',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'pipelineId'                 => 'PipelineId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'startOfJobCreatedTimeRange' => 'StartOfJobCreatedTimeRange',
        'state'                      => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endOfJobCreatedTimeRange) {
            $res['EndOfJobCreatedTimeRange'] = $this->endOfJobCreatedTimeRange;
        }

        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }

        if (null !== $this->maximumPageSize) {
            $res['MaximumPageSize'] = $this->maximumPageSize;
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startOfJobCreatedTimeRange) {
            $res['StartOfJobCreatedTimeRange'] = $this->startOfJobCreatedTimeRange;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndOfJobCreatedTimeRange'])) {
            $model->endOfJobCreatedTimeRange = $map['EndOfJobCreatedTimeRange'];
        }

        if (isset($map['JobIds'])) {
            $model->jobIds = $map['JobIds'];
        }

        if (isset($map['MaximumPageSize'])) {
            $model->maximumPageSize = $map['MaximumPageSize'];
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartOfJobCreatedTimeRange'])) {
            $model->startOfJobCreatedTimeRange = $map['StartOfJobCreatedTimeRange'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
