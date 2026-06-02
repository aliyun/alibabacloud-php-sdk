<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;

class CreateUserAuthConfigRequest extends Model
{
    /**
     * @var string
     */
    public $authConfig;

    /**
     * @var string
     */
    public $authConfigName;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $connectorVersion;
    protected $_name = [
        'authConfig' => 'AuthConfig',
        'authConfigName' => 'AuthConfigName',
        'authType' => 'AuthType',
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
        if (null !== $this->authConfig) {
            $res['AuthConfig'] = $this->authConfig;
        }

        if (null !== $this->authConfigName) {
            $res['AuthConfigName'] = $this->authConfigName;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
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
        if (isset($map['AuthConfig'])) {
            $model->authConfig = $map['AuthConfig'];
        }

        if (isset($map['AuthConfigName'])) {
            $model->authConfigName = $map['AuthConfigName'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
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
