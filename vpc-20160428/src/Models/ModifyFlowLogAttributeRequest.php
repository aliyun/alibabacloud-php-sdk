<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowLogAttributeRequest extends Model
{
    /**
     * @description The new sampling interval of the flow log. Unit: minutes. Valid values: **1**, **5**, and **10**.
     *
     * @example 1
     *
     * @var int
     */
    public $aggregationInterval;

    /**
     * @description The new description of the flow log.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example This is my Flowlog.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the flow log.
     *
     * This parameter is required.
     * @example fl-m5e8vhz2t21sel1nq****
     *
     * @var string
     */
    public $flowLogId;

    /**
     * @description The new name of the flow log.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the flow log is created.
     *
     * This parameter is required.
     * @example cn-qingdao
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
    protected $_name = [
        'aggregationInterval'  => 'AggregationInterval',
        'description'          => 'Description',
        'flowLogId'            => 'FlowLogId',
        'flowLogName'          => 'FlowLogName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationInterval) {
            $res['AggregationInterval'] = $this->aggregationInterval;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowLogAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationInterval'])) {
            $model->aggregationInterval = $map['AggregationInterval'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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

        return $model;
    }
}
