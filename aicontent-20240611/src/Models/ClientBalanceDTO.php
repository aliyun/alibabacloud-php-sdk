<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ClientBalanceDTO extends Model
{
    /**
     * @var float
     */
    public $balance;

    /**
     * @var string
     */
    public $balanceType;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var bool
     */
    public $enableBalance;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'balance' => 'balance',
        'balanceType' => 'balanceType',
        'clientId' => 'clientId',
        'enableBalance' => 'enableBalance',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->balance) {
            $res['balance'] = $this->balance;
        }

        if (null !== $this->balanceType) {
            $res['balanceType'] = $this->balanceType;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->enableBalance) {
            $res['enableBalance'] = $this->enableBalance;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['balance'])) {
            $model->balance = $map['balance'];
        }

        if (isset($map['balanceType'])) {
            $model->balanceType = $map['balanceType'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['enableBalance'])) {
            $model->enableBalance = $map['enableBalance'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
