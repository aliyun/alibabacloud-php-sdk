<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DeliverIncidentRequest extends Model
{
    /**
     * @description 转交用户ID
     *
     * @var int
     */
    public $assignUserId;

    /**
     * @description 幂等校验id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 事件ID
     *
     * @var int
     */
    public $incidentId;
    protected $_name = [
        'assignUserId' => 'assignUserId',
        'clientToken'  => 'clientToken',
        'incidentId'   => 'incidentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignUserId) {
            $res['assignUserId'] = $this->assignUserId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeliverIncidentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignUserId'])) {
            $model->assignUserId = $map['assignUserId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        return $model;
    }
}
