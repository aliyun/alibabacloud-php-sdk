<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateHttpApiRouteRequest\backendConfig;
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
     * @description The route name.
     *
     * @example login
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'backendConfig' => 'backendConfig',
        'description' => 'description',
        'domainIds' => 'domainIds',
        'environmentId' => 'environmentId',
        'match' => 'match',
        'name' => 'name',
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
