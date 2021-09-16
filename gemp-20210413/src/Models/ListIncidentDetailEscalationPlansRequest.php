<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIncidentDetailEscalationPlansRequest extends Model
{
    /**
     * @description 事件ID
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 幂等校验
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'incidentId'  => 'incidentId',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIncidentDetailEscalationPlansRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
