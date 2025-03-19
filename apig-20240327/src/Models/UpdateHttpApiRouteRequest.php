<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\backendConfig;
use AlibabaCloud\Tea\Model;

class UpdateHttpApiRouteRequest extends Model
{
    /**
     * @description Backend service configuration for the route.
     *
     * @var backendConfig
     */
    public $backendConfig;

    /**
     * @description Route description.
     *
     * @example test route
     *
     * @var string
     */
    public $description;

    /**
     * @description List of domain IDs.
     *
     * @var string[]
     */
    public $domainIds;

    /**
     * @description Environment ID.
     *
     * @example env-cquqsollhtgid***
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Route match rule.
     *
     * @var HttpRouteMatch
     */
    public $match;
    protected $_name = [
        'backendConfig' => 'backendConfig',
        'description' => 'description',
        'domainIds' => 'domainIds',
        'environmentId' => 'environmentId',
        'match' => 'match',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendConfig) {
            $res['backendConfig'] = null !== $this->backendConfig ? $this->backendConfig->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHttpApiRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backendConfig'])) {
            $model->backendConfig = backendConfig::fromMap($map['backendConfig']);
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

        return $model;
    }
}
