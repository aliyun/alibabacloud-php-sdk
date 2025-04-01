<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class TrafficConfig extends Model
{
    /**
     * @var float[]
     */
    public $additionalVersionWeight;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $requestId;

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
        'createdTime' => 'createdTime',
        'lastModifiedTime' => 'lastModifiedTime',
        'requestId' => 'requestId',
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

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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
