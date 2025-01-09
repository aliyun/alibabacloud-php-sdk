<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class SenderStatisticsDetailByParamRequest extends Model
{
    /**
     * @description Sending address. Not filled in represents all addresses.
     *
     * @example s***@example.net
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The end time. The difference between the start time and the end time cannot exceed 30 days. Format: yyyy-MM-dd.
     *
     * @example 2021-04-29 00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of entries to return in the request. Valid values: 1 to 100.
     *
     * @example 5
     *
     * @var int
     */
    public $length;

    /**
     * @description The start position of the next page. The offset for the request. If you want to obtain more records, specify the return value of the NextStart parameter for this parameter.
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
     * @description The start time. The start time can be up to 30 days earlier than the current time. Format: yyyy-MM-dd.
     *
     * @example 2021-04-28 00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The delivery status. If you leave this parameter empty, all states are included. Valid values: 0: successful, 2 invalid email address, 3: spam, and 4: failed.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The email tag. If you leave this parameter empty, all email tags are included.
     *
     * @example EmailQuestionnaireHelioscam
     *
     * @var string
     */
    public $tagName;

    /**
     * @description The recipient address. If you leave this parameter empty, all recipient addresses are included.
     *
     * @example b***@example.net
     *
     * @var string
     */
    public $toAddress;
    protected $_name = [
        'accountName'          => 'AccountName',
        'endTime'              => 'EndTime',
        'length'               => 'Length',
        'nextStart'            => 'NextStart',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
        'status'               => 'Status',
        'tagName'              => 'TagName',
        'toAddress'            => 'ToAddress',
    ];

    public function validate()
    {
    }

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
