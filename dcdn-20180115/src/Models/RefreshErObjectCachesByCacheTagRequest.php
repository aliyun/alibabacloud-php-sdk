<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class RefreshErObjectCachesByCacheTagRequest extends Model
{
    /**
     * @var string
     */
    public $cacheTag;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $mergeDomainName;
    protected $_name = [
        'cacheTag' => 'CacheTag',
        'domain' => 'Domain',
        'force' => 'Force',
        'mergeDomainName' => 'MergeDomainName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheTag) {
            $res['CacheTag'] = $this->cacheTag;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->mergeDomainName) {
            $res['MergeDomainName'] = $this->mergeDomainName;
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
        if (isset($map['CacheTag'])) {
            $model->cacheTag = $map['CacheTag'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['MergeDomainName'])) {
            $model->mergeDomainName = $map['MergeDomainName'];
        }

        return $model;
    }
}
