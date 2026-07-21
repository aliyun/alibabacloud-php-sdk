<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class SubscriptionDTO extends Model
{
    /**
     * @var string
     */
    public $balanceType;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stopTime;

    /**
     * @var float
     */
    public $subscriptionAmount;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $validFrom;
    protected $_name = [
        'balanceType' => 'balanceType',
        'clientId' => 'clientId',
        'createTime' => 'createTime',
        'id' => 'id',
        'status' => 'status',
        'stopTime' => 'stopTime',
        'subscriptionAmount' => 'subscriptionAmount',
        'updateTime' => 'updateTime',
        'validFrom' => 'validFrom',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->balanceType) {
            $res['balanceType'] = $this->balanceType;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->stopTime) {
            $res['stopTime'] = $this->stopTime;
        }

        if (null !== $this->subscriptionAmount) {
            $res['subscriptionAmount'] = $this->subscriptionAmount;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->validFrom) {
            $res['validFrom'] = $this->validFrom;
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
        if (isset($map['balanceType'])) {
            $model->balanceType = $map['balanceType'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['stopTime'])) {
            $model->stopTime = $map['stopTime'];
        }

        if (isset($map['subscriptionAmount'])) {
            $model->subscriptionAmount = $map['subscriptionAmount'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['validFrom'])) {
            $model->validFrom = $map['validFrom'];
        }

        return $model;
    }
}
