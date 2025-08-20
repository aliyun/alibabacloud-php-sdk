<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
