<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class SenderStatisticsByTagNameAndBatchIDRequest extends Model
{
    /**
     * @description Sending address. If not filled, it represents all addresses.
     *
     * @example xxx
     *
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $dedicatedIp;

    /**
     * @var string
     */
    public $dedicatedIpPoolId;

    /**
     * @description End time, which cannot exceed 7 days from the start time, in the format yyyy-MM-dd.
     *
     * This parameter is required.
     *
     * @example 2019-09-29
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $esp;

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
     * @description Start time, in the format yyyy-MM-dd.
     *
     * This parameter is required.
     *
     * @example 2019-09-29
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Email tag. If not filled, it represents all tags.
     *
     * @example xxx
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'accountName' => 'AccountName',
        'dedicatedIp' => 'DedicatedIp',
        'dedicatedIpPoolId' => 'DedicatedIpPoolId',
        'endTime' => 'EndTime',
        'esp' => 'Esp',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startTime' => 'StartTime',
        'tagName' => 'TagName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->dedicatedIp) {
            $res['DedicatedIp'] = $this->dedicatedIp;
        }
        if (null !== $this->dedicatedIpPoolId) {
            $res['DedicatedIpPoolId'] = $this->dedicatedIpPoolId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->esp) {
            $res['Esp'] = $this->esp;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SenderStatisticsByTagNameAndBatchIDRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DedicatedIp'])) {
            $model->dedicatedIp = $map['DedicatedIp'];
        }
        if (isset($map['DedicatedIpPoolId'])) {
            $model->dedicatedIpPoolId = $map['DedicatedIpPoolId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Esp'])) {
            $model->esp = $map['Esp'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
