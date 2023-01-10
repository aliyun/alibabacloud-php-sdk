<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateAliasRequest extends Model
{
    /**
     * @description The canary release version to which the alias points and the weight of the canary release version.
     *
     *   The canary release version takes effect only when the function is invoked.
     *   The value consists of a version number and a specific weight. For example, 2:0.05 indicates that when a function is invoked, Version 2 is the canary release version, 5% of the traffic is distributed to the canary release version, and 95% of the traffic is distributed to the major version.
     *
     * @var float[]
     */
    public $additionalVersionWeight;

    /**
     * @description The description of the alias.
     *
     * @example test_description
     *
     * @var string
     */
    public $description;

    /**
     * @description The canary release mode. Valid values:
     *
     *   **Random**: random canary release. This is the default value.
     *   **Content**: rule-based canary release.
     *
     * @example Random
     *
     * @var string
     */
    public $resolvePolicy;

    /**
     * @description The canary release rule. Traffic that meets the canary release rule is routed to the canary release instance.
     *
     * @var RoutePolicy
     */
    public $routePolicy;

    /**
     * @description The ID of the version to which the alias points.
     *
     * @example 1
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'additionalVersionWeight' => 'additionalVersionWeight',
        'description'             => 'description',
        'resolvePolicy'           => 'resolvePolicy',
        'routePolicy'             => 'routePolicy',
        'versionId'               => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalVersionWeight) {
            $res['additionalVersionWeight'] = $this->additionalVersionWeight;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->resolvePolicy) {
            $res['resolvePolicy'] = $this->resolvePolicy;
        }
        if (null !== $this->routePolicy) {
            $res['routePolicy'] = null !== $this->routePolicy ? $this->routePolicy->toMap() : null;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalVersionWeight'])) {
            $model->additionalVersionWeight = $map['additionalVersionWeight'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['resolvePolicy'])) {
            $model->resolvePolicy = $map['resolvePolicy'];
        }
        if (isset($map['routePolicy'])) {
            $model->routePolicy = RoutePolicy::fromMap($map['routePolicy']);
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
