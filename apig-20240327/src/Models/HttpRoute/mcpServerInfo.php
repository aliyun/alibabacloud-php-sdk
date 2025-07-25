<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpRoute\mcpServerInfo\mcpRouteConfig;
use AlibabaCloud\Tea\Model;

class mcpServerInfo extends Model
{
    /**
     * @var string
     */
    public $createFromType;

    /**
     * @var string
     */
    public $importInstanceId;

    /**
     * @var string
     */
    public $importMcpServerId;

    /**
     * @var string
     */
    public $importNamespace;

    /**
     * @var mcpRouteConfig
     */
    public $mcpRouteConfig;

    /**
     * @var string
     */
    public $mcpServerConfig;
    protected $_name = [
        'createFromType' => 'createFromType',
        'importInstanceId' => 'importInstanceId',
        'importMcpServerId' => 'importMcpServerId',
        'importNamespace' => 'importNamespace',
        'mcpRouteConfig' => 'mcpRouteConfig',
        'mcpServerConfig' => 'mcpServerConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createFromType) {
            $res['createFromType'] = $this->createFromType;
        }
        if (null !== $this->importInstanceId) {
            $res['importInstanceId'] = $this->importInstanceId;
        }
        if (null !== $this->importMcpServerId) {
            $res['importMcpServerId'] = $this->importMcpServerId;
        }
        if (null !== $this->importNamespace) {
            $res['importNamespace'] = $this->importNamespace;
        }
        if (null !== $this->mcpRouteConfig) {
            $res['mcpRouteConfig'] = null !== $this->mcpRouteConfig ? $this->mcpRouteConfig->toMap() : null;
        }
        if (null !== $this->mcpServerConfig) {
            $res['mcpServerConfig'] = $this->mcpServerConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mcpServerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createFromType'])) {
            $model->createFromType = $map['createFromType'];
        }
        if (isset($map['importInstanceId'])) {
            $model->importInstanceId = $map['importInstanceId'];
        }
        if (isset($map['importMcpServerId'])) {
            $model->importMcpServerId = $map['importMcpServerId'];
        }
        if (isset($map['importNamespace'])) {
            $model->importNamespace = $map['importNamespace'];
        }
        if (isset($map['mcpRouteConfig'])) {
            $model->mcpRouteConfig = mcpRouteConfig::fromMap($map['mcpRouteConfig']);
        }
        if (isset($map['mcpServerConfig'])) {
            $model->mcpServerConfig = $map['mcpServerConfig'];
        }

        return $model;
    }
}
