<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest\backendConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest\mcpRouteConfig;

class CreateHttpApiRouteRequest extends Model
{
    /**
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @var HttpApiDeployConfig[]
     */
    public $deployConfigs;

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
    public $environmentId;

    /**
     * @var HttpRouteMatch
     */
    public $match;

    /**
     * @var mcpRouteConfig
     */
    public $mcpRouteConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var HttpApiPolicyConfigs[]
     */
    public $policyConfigs;
    protected $_name = [
        'backendConfig' => 'backendConfig',
        'deployConfigs' => 'deployConfigs',
        'description' => 'description',
        'domainIds' => 'domainIds',
        'environmentId' => 'environmentId',
        'match' => 'match',
        'mcpRouteConfig' => 'mcpRouteConfig',
        'name' => 'name',
        'policyConfigs' => 'policyConfigs',
    ];

    public function validate()
    {
        if (null !== $this->backendConfig) {
            $this->backendConfig->validate();
        }
        if (\is_array($this->deployConfigs)) {
            Model::validateArray($this->deployConfigs);
        }
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        if (null !== $this->match) {
            $this->match->validate();
        }
        if (null !== $this->mcpRouteConfig) {
            $this->mcpRouteConfig->validate();
        }
        if (\is_array($this->policyConfigs)) {
            Model::validateArray($this->policyConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendConfig) {
            $res['backendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toArray($noStream) : $this->backendConfig;
        }

        if (null !== $this->deployConfigs) {
            if (\is_array($this->deployConfigs)) {
                $res['deployConfigs'] = [];
                $n1 = 0;
                foreach ($this->deployConfigs as $item1) {
                    $res['deployConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
        }

        if (null !== $this->mcpRouteConfig) {
            $res['mcpRouteConfig'] = null !== $this->mcpRouteConfig ? $this->mcpRouteConfig->toArray($noStream) : $this->mcpRouteConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->policyConfigs) {
            if (\is_array($this->policyConfigs)) {
                $res['policyConfigs'] = [];
                $n1 = 0;
                foreach ($this->policyConfigs as $item1) {
                    $res['policyConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->backendConfig = backendConfig::fromMap($map['backendConfig']);
        }

        if (isset($map['deployConfigs'])) {
            if (!empty($map['deployConfigs'])) {
                $model->deployConfigs = [];
                $n1 = 0;
                foreach ($map['deployConfigs'] as $item1) {
                    $model->deployConfigs[$n1] = HttpApiDeployConfig::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['match'])) {
            $model->match = HttpRouteMatch::fromMap($map['match']);
        }

        if (isset($map['mcpRouteConfig'])) {
            $model->mcpRouteConfig = mcpRouteConfig::fromMap($map['mcpRouteConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['policyConfigs'])) {
            if (!empty($map['policyConfigs'])) {
                $model->policyConfigs = [];
                $n1 = 0;
                foreach ($map['policyConfigs'] as $item1) {
                    $model->policyConfigs[$n1] = HttpApiPolicyConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
