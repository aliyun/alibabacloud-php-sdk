<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;

class DeleteUserAuthConfigRequest extends Model
{
    /**
     * @var string
     */
    public $authConfigId;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $connectorVersion;
    protected $_name = [
        'authConfigId' => 'AuthConfigId',
        'connectorId' => 'ConnectorId',
        'connectorVersion' => 'ConnectorVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfigId) {
            $res['AuthConfigId'] = $this->authConfigId;
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->connectorVersion) {
            $res['ConnectorVersion'] = $this->connectorVersion;
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
        if (isset($map['AuthConfigId'])) {
            $model->authConfigId = $map['AuthConfigId'];
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['ConnectorVersion'])) {
            $model->connectorVersion = $map['ConnectorVersion'];
        }

        return $model;
    }
}
