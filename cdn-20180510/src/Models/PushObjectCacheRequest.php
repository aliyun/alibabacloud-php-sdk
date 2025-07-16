<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class PushObjectCacheRequest extends Model
{
    /**
     * @description The acceleration region where content is to be prefetched. Valid values:
     *
     *   **domestic****: Chinese mainland**
     *   **overseas****: regions outside the Chinese mainland**
     *
     * If you do not set this parameter, content in the service location (specified by parameter Coverage) that you configured for the domain is prefetched. Content is prefetched based on the following rules:
     *
     *   If the acceleration region is set to **Chinese Mainland Only**, content in regions in the Chinese mainland is prefetched.
     *   If the acceleration region is set to **Global**, content in all regions is prefetched.
     *   If the acceleration region is set to **Global (Excluding the Chinese Mainland)**, content in regions outside the Chinese mainland is prefetched.
     *
     * @example domestic
     *
     * @var string
     */
    public $area;

    /**
     * @var bool
     */
    public $consistencyHash;

    /**
     * @description Specifies whether to prefetch content to L2 points of presence (POPs). Valid values:
     *
     *   **true**: prefetches content to L2 POPs.
     *   **false**: prefetches content to regular POPs. Regular POPs can be L2 POPs or L3 POPs. Default value: **false**.
     *
     * @example true
     *
     * @var bool
     */
    public $l2Preload;

    /**
     * @description The URLs based on which content is prefetched. Format: **accelerated domain name/files to be prefetched**.
     *
     * > Separate URLs with line feeds (\\n or \\r\\n). Each object path can be up to 1,024 characters in length.
     *
     * This parameter is required.
     *
     * @example example.com/image/1.png\\nexample.org/image/2.png
     *
     * @var string
     */
    public $objectPath;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter specifies whether to enable the hash key query mode when you run a prefetch task. Valid values:
     *
     *   false: The default mode, in which the submitted URL is used as the hash key for the prefetch.
     *   true: In this mode, the actual hash key used for the prefetch is queried based on the configuration of the domain name.
     *
     * @example true
     *
     * @var bool
     */
    public $queryHashkey;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The custom header for prefetch in the JSON format.
     *
     * @example {
     * "Accept-Encoding": [
     * "gzip"
     * ]
     * }
     *
     * @var string
     */
    public $withHeader;
    protected $_name = [
        'area' => 'Area',
        'consistencyHash' => 'ConsistencyHash',
        'l2Preload' => 'L2Preload',
        'objectPath' => 'ObjectPath',
        'ownerId' => 'OwnerId',
        'queryHashkey' => 'QueryHashkey',
        'securityToken' => 'SecurityToken',
        'withHeader' => 'WithHeader',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->consistencyHash) {
            $res['ConsistencyHash'] = $this->consistencyHash;
        }
        if (null !== $this->l2Preload) {
            $res['L2Preload'] = $this->l2Preload;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->queryHashkey) {
            $res['QueryHashkey'] = $this->queryHashkey;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->withHeader) {
            $res['WithHeader'] = $this->withHeader;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushObjectCacheRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['ConsistencyHash'])) {
            $model->consistencyHash = $map['ConsistencyHash'];
        }
        if (isset($map['L2Preload'])) {
            $model->l2Preload = $map['L2Preload'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QueryHashkey'])) {
            $model->queryHashkey = $map['QueryHashkey'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['WithHeader'])) {
            $model->withHeader = $map['WithHeader'];
        }

        return $model;
    }
}
