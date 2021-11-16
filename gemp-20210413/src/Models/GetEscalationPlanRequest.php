<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetEscalationPlanRequest extends Model
{
    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 升级计划id
     *
     * @var int
     */
    public $escalationPlanId;
    protected $_name = [
        'clientToken'      => 'clientToken',
        'escalationPlanId' => 'escalationPlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEscalationPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }

        return $model;
    }
}
