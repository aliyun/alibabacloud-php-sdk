<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest\backendConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest\mcpRouteConfig;
use AlibabaCloud\Tea\Model;

class CreateHttpApiRouteRequest extends Model
{
    /**
     * @description The backend service configurations of the route.
     *
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @var HttpApiDeployConfig[]
     */
    public $deployConfigs;

    /**
     * @description The route description.
     *
     * @example User logon route
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain name IDs.
     *
     * @var string[]
     */
    public $domainIds;

    /**
     * @description The environment ID.
     *
     * @example env-cpqnr6tlhtgubcv***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The rule for matching the route.
     *
     * @var HttpRouteMatch
     */
    public $match;

    /**
     * @var mcpRouteConfig
     */
    public $mcpRouteConfig;

    /**
     * @description The route name.
     *
     * @example login
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'backendConfig' => 'backendConfig',
        'deployConfigs' => 'deployConfigs',
        'description' => 'description',
        'domainIds' => 'domainIds',
        'environmentId' => 'environmentId',
        'match' => 'match',
        'mcpRouteConfig' => 'mcpRouteConfig',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendConfig) {
            $res['backendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toMap() : null;
        }
        if (null !== $this->deployConfigs) {
            $res['deployConfigs'] = [];
            if (null !== $this->deployConfigs && \is_array($this->deployConfigs)) {
                $n = 0;
                foreach ($this->deployConfigs as $item) {
                    $res['deployConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainIds) {
            $res['domainIds'] = $this->domainIds;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->match) {
            $res['match'] = null !== $this->match ? $this->match->toMap() : null;
        }
        if (null !== $this->mcpRouteConfig) {
            $res['mcpRouteConfig'] = null !== $this->mcpRouteConfig ? $this->mcpRouteConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHttpApiRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backendConfig'])) {
            $model->backendConfig = backendConfig::fromMap($map['backendConfig']);
        }
        if (isset($map['deployConfigs'])) {
            if (!empty($map['deployConfigs'])) {
                $model->deployConfigs = [];
                $n = 0;
                foreach ($map['deployConfigs'] as $item) {
                    $model->deployConfigs[$n++] = null !== $item ? HttpApiDeployConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domainIds'])) {
            if (!empty($map['domainIds'])) {
                $model->domainIds = $map['domainIds'];
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

        return $model;
    }
}
