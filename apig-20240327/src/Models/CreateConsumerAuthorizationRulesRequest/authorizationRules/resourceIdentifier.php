<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest\authorizationRules;

use AlibabaCloud\Tea\Model;

class resourceIdentifier extends Model
{
    /**
     * @description The environment ID.
     *
     * @example env-cti17hem1hktoruj98ug
     *
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $parentResourceId;

    /**
     * @description The resource ID.
     *
     * @example ha-cn-li942gy8p03
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'environmentId' => 'environmentId',
        'parentResourceId' => 'parentResourceId',
        'resourceId' => 'resourceId',
        'resources' => 'resources',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->parentResourceId) {
            $res['parentResourceId'] = $this->parentResourceId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resources) {
            $res['resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceIdentifier
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['parentResourceId'])) {
            $model->parentResourceId = $map['parentResourceId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = $map['resources'];
            }
        }

        return $model;
    }
}
