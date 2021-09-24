<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetIncidentSubtotalCountRequest extends Model
{
    /**
     * @description 事件id列表
     *
     * @var int[]
     */
    public $incidentIds;

    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'incidentIds' => 'incidentIds',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentIds) {
            $res['incidentIds'] = $this->incidentIds;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIncidentSubtotalCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['incidentIds'])) {
            if (!empty($map['incidentIds'])) {
                $model->incidentIds = $map['incidentIds'];
            }
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
