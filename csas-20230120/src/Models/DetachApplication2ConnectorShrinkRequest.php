<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DetachApplication2ConnectorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationIdsShrink;

    /**
     * @description ConnectorID。
     *
     * @example connector-94db94e06b98****
     *
     * @var string
     */
    public $connectorId;
    protected $_name = [
        'applicationIdsShrink' => 'ApplicationIds',
        'connectorId'          => 'ConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIdsShrink) {
            $res['ApplicationIds'] = $this->applicationIdsShrink;
        }
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachApplication2ConnectorShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            $model->applicationIdsShrink = $map['ApplicationIds'];
        }
        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        return $model;
    }
}
