<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CreateIncidentSubtotalRequest extends Model
{
    /**
     * @description 幂等校验Id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 事件id
     *
     * @var int
     */
    public $incidentId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'description' => 'description',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIncidentSubtotalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        return $model;
    }
}
