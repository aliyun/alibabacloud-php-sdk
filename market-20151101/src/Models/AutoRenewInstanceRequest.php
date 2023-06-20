<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class AutoRenewInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $autoRenewCycle;

    /**
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @var int
     */
    public $orderBizId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoRenewCycle'    => 'AutoRenewCycle',
        'autoRenewDuration' => 'AutoRenewDuration',
        'orderBizId'        => 'OrderBizId',
        'ownerId'           => 'OwnerId',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewCycle) {
            $res['AutoRenewCycle'] = $this->autoRenewCycle;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->orderBizId) {
            $res['OrderBizId'] = $this->orderBizId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AutoRenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewCycle'])) {
            $model->autoRenewCycle = $map['AutoRenewCycle'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['OrderBizId'])) {
            $model->orderBizId = $map['OrderBizId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
