<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApipageResponseBody\resultContent\list_;

use AlibabaCloud\Dara\Model;

class cacheRule extends Model
{
    /**
     * @var string
     */
    public $cacheKey;

    /**
     * @var bool
     */
    public $needCache;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'cacheKey' => 'CacheKey',
        'needCache' => 'NeedCache',
        'ttl' => 'Ttl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheKey) {
            $res['CacheKey'] = $this->cacheKey;
        }

        if (null !== $this->needCache) {
            $res['NeedCache'] = $this->needCache;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
        if (isset($map['CacheKey'])) {
            $model->cacheKey = $map['CacheKey'];
        }

        if (isset($map['NeedCache'])) {
            $model->needCache = $map['NeedCache'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
