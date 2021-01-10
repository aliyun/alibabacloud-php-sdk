<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class ListMediaWorkflowExecutionsRequest extends Model
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
    public $mediaWorkflowId;

    /**
     * @var string
     */
    public $mediaWorkflowName;

    /**
     * @var string
     */
    public $inputFileURL;

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
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'mediaWorkflowId'      => 'MediaWorkflowId',
        'mediaWorkflowName'    => 'MediaWorkflowName',
        'inputFileURL'         => 'InputFileURL',
        'nextPageToken'        => 'NextPageToken',
        'maximumPageSize'      => 'MaximumPageSize',
        'ownerAccount'         => 'OwnerAccount',
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
        if (null !== $this->mediaWorkflowId) {
            $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        }
        if (null !== $this->mediaWorkflowName) {
            $res['MediaWorkflowName'] = $this->mediaWorkflowName;
        }
        if (null !== $this->inputFileURL) {
            $res['InputFileURL'] = $this->inputFileURL;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->maximumPageSize) {
            $res['MaximumPageSize'] = $this->maximumPageSize;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaWorkflowExecutionsRequest
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
        if (isset($map['MediaWorkflowId'])) {
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if (isset($map['MediaWorkflowName'])) {
            $model->mediaWorkflowName = $map['MediaWorkflowName'];
        }
        if (isset($map['InputFileURL'])) {
            $model->inputFileURL = $map['InputFileURL'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['MaximumPageSize'])) {
            $model->maximumPageSize = $map['MaximumPageSize'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
