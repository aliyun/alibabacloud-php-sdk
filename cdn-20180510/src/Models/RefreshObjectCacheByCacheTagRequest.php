<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class RefreshObjectCacheByCacheTagRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $cacheTag;

    /**
     * @description The accelerated domain name.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to purge all resources that you submit if the requested content is one of the resources that you submit to purge. Default value: false.
     *
     *   **true**: The nearest POP fetches all resources from the origin server, delivers them to the client, and updates the cache with the new version.
     *   **false**: The nearest POP checks the Last-Modified parameter of the resource on the origin server. If the parameter value is the same as that of the cached resource, the POP serves the cached resource. If the parameter value is not the same as that of the cached resource, the POP fetches the latest version from the origin server, delivers it to the client, and updates the cache with the new version.
     *
     * @example true
     *
     * @var bool
     */
    public $force;
    protected $_name = [
        'cacheTag'   => 'CacheTag',
        'domainName' => 'DomainName',
        'force'      => 'Force',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheTag) {
            $res['CacheTag'] = $this->cacheTag;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshObjectCacheByCacheTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheTag'])) {
            $model->cacheTag = $map['CacheTag'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
