<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DetachApplication2ConnectorRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description ConnectorID。
     *
     * This parameter is required.
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
     * @return DetachApplication2ConnectorRequest
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
