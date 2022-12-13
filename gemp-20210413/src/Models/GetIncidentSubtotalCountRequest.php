<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetIncidentSubtotalCountRequest extends Model
{
    /**
     * @example 7C56D225-7C34-40BB-9624-C8BA449260E6
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var int[]
     */
    public $incidentIds;
    protected $_name = [
        'clientToken' => 'clientToken',
        'incidentIds' => 'incidentIds',
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
        if (null !== $this->incidentIds) {
            $res['incidentIds'] = $this->incidentIds;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['incidentIds'])) {
            if (!empty($map['incidentIds'])) {
                $model->incidentIds = $map['incidentIds'];
            }
        }

        return $model;
    }
}
