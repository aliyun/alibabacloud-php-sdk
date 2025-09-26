<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class MCPAPI extends Model
{
    /**
     * @var MCPBackendConfig
     */
    public $backendConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $exposedUriPath;

    /**
     * @var MCPMatch
     */
    public $match;

    /**
     * @var bool
     */
    public $mcpStatisticsEnable;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $toolId;

    /**
     * @var string
     */
    public $toolsConfig;
    protected $_name = [
        'backendConfig' => 'backendConfig',
        'description' => 'description',
        'exposedUriPath' => 'exposedUriPath',
        'match' => 'match',
        'mcpStatisticsEnable' => 'mcpStatisticsEnable',
        'protocol' => 'protocol',
        'toolId' => 'toolId',
        'toolsConfig' => 'toolsConfig',
    ];

    public function validate()
    {
        if (null !== $this->backendConfig) {
            $this->backendConfig->validate();
        }
        if (null !== $this->match) {
            $this->match->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendConfig) {
            $res['backendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toArray($noStream) : $this->backendConfig;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->exposedUriPath) {
            $res['exposedUriPath'] = $this->exposedUriPath;
        }

        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
        }

        if (null !== $this->mcpStatisticsEnable) {
            $res['mcpStatisticsEnable'] = $this->mcpStatisticsEnable;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->toolId) {
            $res['toolId'] = $this->toolId;
        }

        if (null !== $this->toolsConfig) {
            $res['toolsConfig'] = $this->toolsConfig;
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
        if (isset($map['backendConfig'])) {
            $model->backendConfig = MCPBackendConfig::fromMap($map['backendConfig']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['exposedUriPath'])) {
            $model->exposedUriPath = $map['exposedUriPath'];
        }

        if (isset($map['match'])) {
            $model->match = MCPMatch::fromMap($map['match']);
        }

        if (isset($map['mcpStatisticsEnable'])) {
            $model->mcpStatisticsEnable = $map['mcpStatisticsEnable'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['toolId'])) {
            $model->toolId = $map['toolId'];
        }

        if (isset($map['toolsConfig'])) {
            $model->toolsConfig = $map['toolsConfig'];
        }

        return $model;
    }
}
