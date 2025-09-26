<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class MCPAPIConfiguration extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $exposedUriPath;

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
    protected $_name = [
        'description' => 'description',
        'exposedUriPath' => 'exposedUriPath',
        'mcpStatisticsEnable' => 'mcpStatisticsEnable',
        'protocol' => 'protocol',
        'toolId' => 'toolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->exposedUriPath) {
            $res['exposedUriPath'] = $this->exposedUriPath;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['exposedUriPath'])) {
            $model->exposedUriPath = $map['exposedUriPath'];
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

        return $model;
    }
}
