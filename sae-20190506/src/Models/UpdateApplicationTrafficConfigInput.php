<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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
        'resolvePolicy' => 'resolvePolicy',
        'routePolicy' => 'routePolicy',
        'versionId' => 'versionId',
    ];

    public function validate()
    {
        if (\is_array($this->additionalVersionWeight)) {
            Model::validateArray($this->additionalVersionWeight);
        }
        if (null !== $this->routePolicy) {
            $this->routePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalVersionWeight) {
            if (\is_array($this->additionalVersionWeight)) {
                $res['additionalVersionWeight'] = [];
                foreach ($this->additionalVersionWeight as $key1 => $value1) {
                    $res['additionalVersionWeight'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resolvePolicy) {
            $res['resolvePolicy'] = $this->resolvePolicy;
        }

        if (null !== $this->routePolicy) {
            $res['routePolicy'] = null !== $this->routePolicy ? $this->routePolicy->toArray($noStream) : $this->routePolicy;
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['additionalVersionWeight'])) {
            if (!empty($map['additionalVersionWeight'])) {
                $model->additionalVersionWeight = [];
                foreach ($map['additionalVersionWeight'] as $key1 => $value1) {
                    $model->additionalVersionWeight[$key1] = $value1;
                }
            }
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
