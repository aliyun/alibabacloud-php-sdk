<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value;

use AlibabaCloud\Tea\Model;

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
        'cacheKey'  => 'CacheKey',
        'needCache' => 'NeedCache',
        'ttl'       => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return cacheRule
     */
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
