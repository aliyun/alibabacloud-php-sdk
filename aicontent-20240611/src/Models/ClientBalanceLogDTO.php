<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ClientBalanceLogDTO extends Model
{
    /**
     * @var float
     */
    public $balanceAfter;

    /**
     * @var float
     */
    public $balanceBefore;

    /**
     * @var float
     */
    public $changeAmount;

    /**
     * @var string
     */
    public $changeType;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'balanceAfter' => 'balanceAfter',
        'balanceBefore' => 'balanceBefore',
        'changeAmount' => 'changeAmount',
        'changeType' => 'changeType',
        'clientId' => 'clientId',
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'remark' => 'remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->balanceAfter) {
            $res['balanceAfter'] = $this->balanceAfter;
        }

        if (null !== $this->balanceBefore) {
            $res['balanceBefore'] = $this->balanceBefore;
        }

        if (null !== $this->changeAmount) {
            $res['changeAmount'] = $this->changeAmount;
        }

        if (null !== $this->changeType) {
            $res['changeType'] = $this->changeType;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['balanceAfter'])) {
            $model->balanceAfter = $map['balanceAfter'];
        }

        if (isset($map['balanceBefore'])) {
            $model->balanceBefore = $map['balanceBefore'];
        }

        if (isset($map['changeAmount'])) {
            $model->changeAmount = $map['changeAmount'];
        }

        if (isset($map['changeType'])) {
            $model->changeType = $map['changeType'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
