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
     * @description The resource ID.
     *
     * @example ha-cn-li942gy8p03
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'environmentId' => 'environmentId',
        'resourceId' => 'resourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
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
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        return $model;
    }
}
