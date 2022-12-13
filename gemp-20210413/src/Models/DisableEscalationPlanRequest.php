<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DisableEscalationPlanRequest extends Model
{
    /**
     * @example A5A1FEAE-9C47-011C-9C73-A376BC2REQUEST
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 234534
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
     * @return DisableEscalationPlanRequest
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
