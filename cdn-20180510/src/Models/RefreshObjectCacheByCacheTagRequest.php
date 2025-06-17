<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class RefreshObjectCacheByCacheTagRequest extends Model
{
    /**
     * @var string
     */
    public $cacheTag;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'cacheTag' => 'CacheTag',
        'domainName' => 'DomainName',
        'force' => 'Force',
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

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
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

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
