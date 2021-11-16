<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetIncidentRequest extends Model
{
    /**
     * @description 幂等校验
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
        'clientToken' => 'clientToken',
        'incidentId'  => 'incidentId',
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
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIncidentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        return $model;
    }
}
