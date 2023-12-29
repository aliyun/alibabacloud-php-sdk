<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateAliasResponseBody extends Model
{
    /**
     * @description The additional version to which the alias points and the weight of the additional version.
     *
     *   The additional version takes effect only when the function is invoked.
     *   The value consists of a version number and a specific weight. For example, 2:0.05 indicates that when a function is invoked, Version 2 is the canary release version, 5% of the traffic is distributed to the canary release version, and 95% of the traffic is distributed to the major version.
     *
     * @var float[]
     */
    public $additionalVersionWeight;

    /**
     * @description The name of the alias.
     *
     * @example alias_test
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The time when the alias was created.
     *
     * @example 2020-04-23T06:32:43Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the alias.
     *
     * @example test_description
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the alias was last modified.
     *
     * @example 2020-04-23T06:32:43Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $resolvePolicy;

    /**
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
        'aliasName'               => 'aliasName',
        'createdTime'             => 'createdTime',
        'description'             => 'description',
        'lastModifiedTime'        => 'lastModifiedTime',
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
        if (null !== $this->aliasName) {
            $res['aliasName'] = $this->aliasName;
        }
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
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
     * @return CreateAliasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalVersionWeight'])) {
            $model->additionalVersionWeight = $map['additionalVersionWeight'];
        }
        if (isset($map['aliasName'])) {
            $model->aliasName = $map['aliasName'];
        }
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
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
