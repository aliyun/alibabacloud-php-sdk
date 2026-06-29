<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class SetTokenPlanOrgInviteConfigRequest extends Model
{
    /**
     * @var string
     */
    public $defaultRoleId;

    /**
     * @var string
     */
    public $seatAssignStrategy;
    protected $_name = [
        'defaultRoleId' => 'DefaultRoleId',
        'seatAssignStrategy' => 'SeatAssignStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultRoleId) {
            $res['DefaultRoleId'] = $this->defaultRoleId;
        }

        if (null !== $this->seatAssignStrategy) {
            $res['SeatAssignStrategy'] = $this->seatAssignStrategy;
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
        if (isset($map['DefaultRoleId'])) {
            $model->defaultRoleId = $map['DefaultRoleId'];
        }

        if (isset($map['SeatAssignStrategy'])) {
            $model->seatAssignStrategy = $map['SeatAssignStrategy'];
        }

        return $model;
    }
}
