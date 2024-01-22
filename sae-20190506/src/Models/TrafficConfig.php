<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'createdTime'             => 'createdTime',
        'lastModifiedTime'        => 'lastModifiedTime',
        'requestId'               => 'requestId',
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
     * @return TrafficConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalVersionWeight'])) {
            $model->additionalVersionWeight = $map['additionalVersionWeight'];
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
