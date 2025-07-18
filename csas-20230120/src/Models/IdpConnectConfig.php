<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class IdpConnectConfig extends Model
{
    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var bool
     */
    public $useConnector;
    protected $_name = [
        'connectorId' => 'ConnectorId',
        'useConnector' => 'UseConnector',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }
        if (null !== $this->useConnector) {
            $res['UseConnector'] = $this->useConnector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IdpConnectConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }
        if (isset($map['UseConnector'])) {
            $model->useConnector = $map['UseConnector'];
        }

        return $model;
    }
}
