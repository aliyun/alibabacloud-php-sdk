<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationTrafficConfigInput extends Model
{
    /**
     * @var float[]
     */
    public $additionalVersionWeight;

    /**
     * @var string
     */
    public $resolvePolicy;

    /**
     * @var RoutePolicy
     */
    public $routePolicy;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'additionalVersionWeight' => 'additionalVersionWeight',
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
     * @return UpdateApplicationTrafficConfigInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalVersionWeight'])) {
            $model->additionalVersionWeight = $map['additionalVersionWeight'];
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
