<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models\ListUserAuthConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class userAuthConfigs extends Model
{
    /**
     * @var string
     */
    public $authConfigId;

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

    /**
     * @var int
     */
    public $flowCount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'authConfigId' => 'AuthConfigId',
        'authConfigName' => 'AuthConfigName',
        'authType' => 'AuthType',
        'connectorId' => 'ConnectorId',
        'connectorVersion' => 'ConnectorVersion',
        'flowCount' => 'FlowCount',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
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

        if (null !== $this->flowCount) {
            $res['FlowCount'] = $this->flowCount;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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

        if (isset($map['FlowCount'])) {
            $model->flowCount = $map['FlowCount'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
