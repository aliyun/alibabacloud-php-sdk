<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class UpdateAckClusterConnectorRequest extends Model
{
    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $connectorName;

    /**
     * @var string
     */
    public $ttl;
    protected $_name = [
        'connectorId' => 'ConnectorId',
        'connectorName' => 'ConnectorName',
        'ttl' => 'Ttl',
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

        if (null !== $this->connectorName) {
            $res['ConnectorName'] = $this->connectorName;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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

        if (isset($map['ConnectorName'])) {
            $model->connectorName = $map['ConnectorName'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
