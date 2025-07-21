<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class SenderStatisticsDetailByParamRequest extends Model
{
    /**
     * @description Sending address. If not filled, it represents all addresses.
     *
     * > **AccountName**, **TagName**, and **ToAddress** can all be left unfilled. If any are filled, only one of these parameters can be passed; you cannot pass a combination of two or more.
     *
     * @example s***@example.net
     *
     * @var string
     */
    public $accountName;

    /**
     * @description End time. The span between start and end times cannot exceed 30 days, format: yyyy-MM-dd HH:mm.
     *
     * @example 2021-04-29 00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies the number of results to return in this request. Range is 1~100.
     *
     * @example 5
     *
     * @var int
     */
    public $length;

    /**
     * @description Used for pagination. Specifies the offset for this request. If there are more results, set this returned value to the NextStart in the next request.
     *
     * @example 90f0243616#203#a***@example.net-1658817837#a***@example.net.247475288187
     *
     * @var string
     */
    public $nextStart;

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
     * @description Start time. The span between start and end times cannot exceed 30 days, format: yyyy-MM-dd HH:mm
     *
     * @example 2021-04-28 00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Delivery result. If not filled, it represents all statuses. Values:
     *
     * - 0: Success
     * - 2: Invalid Address
     * - 3: Spam
     * - 4: Failure
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Email tag. If not filled, it represents all tags.
     *
     * @example EmailQuestionnaireHelioscam
     *
     * @var string
     */
    public $tagName;

    /**
     * @description Recipient address. If not filled, it represents all recipient addresses.
     *
     * @example b***@example.net
     *
     * @var string
     */
    public $toAddress;
    protected $_name = [
        'accountName' => 'AccountName',
        'endTime' => 'EndTime',
        'length' => 'Length',
        'nextStart' => 'NextStart',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tagName' => 'TagName',
        'toAddress' => 'ToAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->nextStart) {
            $res['NextStart'] = $this->nextStart;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SenderStatisticsDetailByParamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['NextStart'])) {
            $model->nextStart = $map['NextStart'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }

        return $model;
    }
}
