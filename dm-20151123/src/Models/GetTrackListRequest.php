<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class GetTrackListRequest extends Model
{
    /**
     * @description Sender address.
     *
     * > If not filled, it represents all addresses; if TagName is provided, this parameter must not be empty.
     *
     * @example test@example.com
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
     * @description End time, the span between start and end time cannot exceed 7 days. Format: yyyy-MM-dd.
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
     * @description For the first query, set to 0; for subsequent queries, fixed at 1. 1 indicates pagination in ascending order by time. (This field is deprecated)
     *
     * @example (This field is deprecated)
     *
     * @var string
     */
    public $offset;

    /**
     * @description Used for pagination. Not set for the first query, but for subsequent queries, it should be set to the value of OffsetCreateTime from the previous response. (This field is deprecated)
     *
     * @example (This field is deprecated)
     *
     * @var string
     */
    public $offsetCreateTime;

    /**
     * @description (This field is deprecated)
     *
     * @example (This field is deprecated)
     *
     * @var string
     */
    public $offsetCreateTimeDesc;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Page number
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description Page size
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Start time, which cannot be earlier than 30 days. Format: yyyy-MM-dd.
     *
     * This parameter is required.
     *
     * @example 2019-09-29
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Tag name
     *
     * @example tagname
     *
     * @var string
     */
    public $tagName;

    /**
     * @description (This field is deprecated)
     *
     * @example (This field is deprecated)
     *
     * @var string
     */
    public $total;
    protected $_name = [
        'accountName' => 'AccountName',
        'dedicatedIp' => 'DedicatedIp',
        'dedicatedIpPoolId' => 'DedicatedIpPoolId',
        'endTime' => 'EndTime',
        'esp' => 'Esp',
        'offset' => 'Offset',
        'offsetCreateTime' => 'OffsetCreateTime',
        'offsetCreateTimeDesc' => 'OffsetCreateTimeDesc',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startTime' => 'StartTime',
        'tagName' => 'TagName',
        'total' => 'Total',
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
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->offsetCreateTime) {
            $res['OffsetCreateTime'] = $this->offsetCreateTime;
        }
        if (null !== $this->offsetCreateTimeDesc) {
            $res['OffsetCreateTimeDesc'] = $this->offsetCreateTimeDesc;
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrackListRequest
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
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['OffsetCreateTime'])) {
            $model->offsetCreateTime = $map['OffsetCreateTime'];
        }
        if (isset($map['OffsetCreateTimeDesc'])) {
            $model->offsetCreateTimeDesc = $map['OffsetCreateTimeDesc'];
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
