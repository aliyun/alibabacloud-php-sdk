<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetAllExpirationDayRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The expiration date. You can set an expiration date only for ECS instances that have not expired. The expiration date that you specify do not take effect on expired ECS instances. After the expiration date is set, the expiration date is used when you renew ECS instances.
     *
     * You can set the expiration date to a day from the 1st to the 28th of each month.
     * @example 10
     *
     * @var string
     */
    public $unifyExpireDay;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'unifyExpireDay' => 'UnifyExpireDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->unifyExpireDay) {
            $res['UnifyExpireDay'] = $this->unifyExpireDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAllExpirationDayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['UnifyExpireDay'])) {
            $model->unifyExpireDay = $map['UnifyExpireDay'];
        }

        return $model;
    }
}
