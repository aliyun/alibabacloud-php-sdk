<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Ticket extends Model
{
    /**
     * @example 1000000000
     *
     * @var int
     */
    public $callerUid;

    /**
     * @example 2023-09-06 14:57:07
     *
     * @var string
     */
    public $createDate;

    /**
     * @example 100
     *
     * @var int
     */
    public $expirationTime;

    /**
     * @example 2023-09-06 14:58:07
     *
     * @var string
     */
    public $expireDate;

    /**
     * @example {"xx":"yy"}
     *
     * @var string
     */
    public $extra;

    /**
     * @example 测试
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $policy;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $ticket;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $ticketId;

    /**
     * @example false
     *
     * @var bool
     */
    public $unlimitedExpiration;

    /**
     * @example true
     *
     * @var bool
     */
    public $unlimitedNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $usedNumber;

    /**
     * @example false
     *
     * @var bool
     */
    public $valid;
    protected $_name = [
        'callerUid'           => 'callerUid',
        'createDate'          => 'createDate',
        'expirationTime'      => 'expirationTime',
        'expireDate'          => 'expireDate',
        'extra'               => 'extra',
        'name'                => 'name',
        'number'              => 'number',
        'policy'              => 'policy',
        'ticket'              => 'ticket',
        'ticketId'            => 'ticketId',
        'unlimitedExpiration' => 'unlimitedExpiration',
        'unlimitedNumber'     => 'unlimitedNumber',
        'usedNumber'          => 'usedNumber',
        'valid'               => 'valid',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->ticket) {
            $res['ticket'] = $this->ticket;
        }
        if (null !== $this->ticketId) {
            $res['ticketId'] = $this->ticketId;
        }
        if (null !== $this->unlimitedExpiration) {
            $res['unlimitedExpiration'] = $this->unlimitedExpiration;
        }
        if (null !== $this->unlimitedNumber) {
            $res['unlimitedNumber'] = $this->unlimitedNumber;
        }
        if (null !== $this->usedNumber) {
            $res['usedNumber'] = $this->usedNumber;
        }
        if (null !== $this->valid) {
            $res['valid'] = $this->valid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Ticket
     */
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
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['ticket'])) {
            $model->ticket = $map['ticket'];
        }
        if (isset($map['ticketId'])) {
            $model->ticketId = $map['ticketId'];
        }
        if (isset($map['unlimitedExpiration'])) {
            $model->unlimitedExpiration = $map['unlimitedExpiration'];
        }
        if (isset($map['unlimitedNumber'])) {
            $model->unlimitedNumber = $map['unlimitedNumber'];
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
