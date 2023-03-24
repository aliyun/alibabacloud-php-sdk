<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class AttachApplication2ConnectorRequest extends Model
{
    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description ConnectorID。
     *
     * @example connector-94db94e06b98****
     *
     * @var string
     */
    public $connectorId;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
        'connectorId'    => 'ConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachApplication2ConnectorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = $map['ApplicationIds'];
            }
        }
        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        return $model;
    }
}
