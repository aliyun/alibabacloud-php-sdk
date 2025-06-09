<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class Ticket extends Model
{
    /**
     * @var int
     */
    public $callerUid;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $sharingTo;

    /**
     * @var string
     */
    public $ticket;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var int
     */
    public $usedNumber;

    /**
     * @var bool
     */
    public $valid;
    protected $_name = [
        'callerUid' => 'callerUid',
        'createDate' => 'createDate',
        'expirationTime' => 'expirationTime',
        'expireDate' => 'expireDate',
        'extra' => 'extra',
        'name' => 'name',
        'number' => 'number',
        'sharingTo' => 'sharingTo',
        'ticket' => 'ticket',
        'ticketId' => 'ticketId',
        'usedNumber' => 'usedNumber',
        'valid' => 'valid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callerUid) {
            $res['callerUid'] = $this->callerUid;
        }

        if (null !== $this->createDate) {
            $res['createDate'] = $this->createDate;
        }

        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }

        if (null !== $this->expireDate) {
            $res['expireDate'] = $this->expireDate;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        if (null !== $this->sharingTo) {
            $res['sharingTo'] = $this->sharingTo;
        }

        if (null !== $this->ticket) {
            $res['ticket'] = $this->ticket;
        }

        if (null !== $this->ticketId) {
            $res['ticketId'] = $this->ticketId;
        }

        if (null !== $this->usedNumber) {
            $res['usedNumber'] = $this->usedNumber;
        }

        if (null !== $this->valid) {
            $res['valid'] = $this->valid;
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
        if (isset($map['callerUid'])) {
            $model->callerUid = $map['callerUid'];
        }

        if (isset($map['createDate'])) {
            $model->createDate = $map['createDate'];
        }

        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }

        if (isset($map['expireDate'])) {
            $model->expireDate = $map['expireDate'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        if (isset($map['sharingTo'])) {
            $model->sharingTo = $map['sharingTo'];
        }

        if (isset($map['ticket'])) {
            $model->ticket = $map['ticket'];
        }

        if (isset($map['ticketId'])) {
            $model->ticketId = $map['ticketId'];
        }

        if (isset($map['usedNumber'])) {
            $model->usedNumber = $map['usedNumber'];
        }

        if (isset($map['valid'])) {
            $model->valid = $map['valid'];
        }

        return $model;
    }
}
