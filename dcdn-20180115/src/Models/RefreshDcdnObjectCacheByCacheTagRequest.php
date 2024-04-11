<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class RefreshDcdnObjectCacheByCacheTagRequest extends Model
{
    /**
     * @example tag1,tag2
     *
     * @var string
     */
    public $cacheTag;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
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
     * @return RefreshDcdnObjectCacheByCacheTagRequest
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
