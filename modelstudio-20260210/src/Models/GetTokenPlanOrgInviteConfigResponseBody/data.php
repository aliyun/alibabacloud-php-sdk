<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetTokenPlanOrgInviteConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $defaultRoleId;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $seatAssignStrategy;
    protected $_name = [
        'defaultRoleId' => 'DefaultRoleId',
        'orgId' => 'OrgId',
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

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
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

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['SeatAssignStrategy'])) {
            $model->seatAssignStrategy = $map['SeatAssignStrategy'];
        }

        return $model;
    }
}
