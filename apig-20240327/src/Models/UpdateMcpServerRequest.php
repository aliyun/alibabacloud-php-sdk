<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerRequest\assembledSources;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerRequest\backendConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateMcpServerRequest\grayMcpServerConfigs;

class UpdateMcpServerRequest extends Model
{
    /**
     * @var assembledSources[]
     */
    public $assembledSources;

    /**
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @var string
     */
    public $createFromType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $domainIds;

    /**
     * @var string
     */
    public $exposedUriPath;

    /**
     * @var grayMcpServerConfigs[]
     */
    public $grayMcpServerConfigs;

    /**
     * @var HttpRouteMatch
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
    public $type;
    protected $_name = [
        'assembledSources' => 'assembledSources',
        'backendConfig' => 'backendConfig',
        'createFromType' => 'createFromType',
        'description' => 'description',
        'domainIds' => 'domainIds',
        'exposedUriPath' => 'exposedUriPath',
        'grayMcpServerConfigs' => 'grayMcpServerConfigs',
        'match' => 'match',
        'mcpStatisticsEnable' => 'mcpStatisticsEnable',
        'protocol' => 'protocol',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->assembledSources)) {
            Model::validateArray($this->assembledSources);
        }
        if (null !== $this->backendConfig) {
            $this->backendConfig->validate();
        }
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        if (\is_array($this->grayMcpServerConfigs)) {
            Model::validateArray($this->grayMcpServerConfigs);
        }
        if (null !== $this->match) {
            $this->match->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assembledSources) {
            if (\is_array($this->assembledSources)) {
                $res['assembledSources'] = [];
                $n1 = 0;
                foreach ($this->assembledSources as $item1) {
                    $res['assembledSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backendConfig) {
            $res['backendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toArray($noStream) : $this->backendConfig;
        }

        if (null !== $this->createFromType) {
            $res['createFromType'] = $this->createFromType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->domainIds) {
            if (\is_array($this->domainIds)) {
                $res['domainIds'] = [];
                $n1 = 0;
                foreach ($this->domainIds as $item1) {
                    $res['domainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exposedUriPath) {
            $res['exposedUriPath'] = $this->exposedUriPath;
        }

        if (null !== $this->grayMcpServerConfigs) {
            if (\is_array($this->grayMcpServerConfigs)) {
                $res['grayMcpServerConfigs'] = [];
                $n1 = 0;
                foreach ($this->grayMcpServerConfigs as $item1) {
                    $res['grayMcpServerConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['assembledSources'])) {
            if (!empty($map['assembledSources'])) {
                $model->assembledSources = [];
                $n1 = 0;
                foreach ($map['assembledSources'] as $item1) {
                    $model->assembledSources[$n1] = assembledSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['backendConfig'])) {
            $model->backendConfig = backendConfig::fromMap($map['backendConfig']);
        }

        if (isset($map['createFromType'])) {
            $model->createFromType = $map['createFromType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['domainIds'])) {
            if (!empty($map['domainIds'])) {
                $model->domainIds = [];
                $n1 = 0;
                foreach ($map['domainIds'] as $item1) {
                    $model->domainIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['exposedUriPath'])) {
            $model->exposedUriPath = $map['exposedUriPath'];
        }

        if (isset($map['grayMcpServerConfigs'])) {
            if (!empty($map['grayMcpServerConfigs'])) {
                $model->grayMcpServerConfigs = [];
                $n1 = 0;
                foreach ($map['grayMcpServerConfigs'] as $item1) {
                    $model->grayMcpServerConfigs[$n1] = grayMcpServerConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }

        if (isset($map['mcpStatisticsEnable'])) {
            $model->mcpStatisticsEnable = $map['mcpStatisticsEnable'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
