<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class EniCacheConfig extends Model
{
    /**
     * @var int
     */
    public $cachePoolSize;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'cachePoolSize' => 'CachePoolSize',
        'enabled' => 'Enabled',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cachePoolSize) {
            $res['CachePoolSize'] = $this->cachePoolSize;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EniCacheConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CachePoolSize'])) {
            $model->cachePoolSize = $map['CachePoolSize'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
