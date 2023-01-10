<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\ListAliasesResponseBody;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\RoutePolicy;
use AlibabaCloud\Tea\Model;

class aliases extends Model
{
    /**
     * @description The weight of the canary release version.
     *
     * @var float[]
     */
    public $additionalVersionWeight;

    /**
     * @description The name of the alias.
     *
     * @example test
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The creation time.
     *
     * @example 2016-08-15T16:06:05.000+0000
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the alias.
     *
     * @example Sample alias.
     *
     * @var string
     */
    public $description;

    /**
     * @description The last update time.
     *
     * @example 2016-08-15T16:06:05.000+0000
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @example Random
     *
     * @var string
     */
    public $resolvePolicy;

    /**
     * @var RoutePolicy
     */
    public $routePolicy;

    /**
     * @description The ID of the version.
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
     * @return aliases
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
