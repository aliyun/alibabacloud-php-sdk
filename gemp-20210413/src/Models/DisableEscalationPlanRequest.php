<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DisableEscalationPlanRequest extends Model
{
    /**
     * @description 升级计划ID
     *
     * @var int
     */
    public $escalationPlanId;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'escalationPlanId' => 'escalationPlanId',
        'clientToken'      => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableEscalationPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
