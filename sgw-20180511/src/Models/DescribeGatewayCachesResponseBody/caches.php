<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCachesResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayCachesResponseBody\caches\cache;
use AlibabaCloud\Tea\Model;

class caches extends Model
{
    /**
     * @var cache[]
     */
    public $cache;
    protected $_name = [
        'cache' => 'Cache',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cache) {
            $res['Cache'] = [];
            if (null !== $this->cache && \is_array($this->cache)) {
                $n = 0;
                foreach ($this->cache as $item) {
                    $res['Cache'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return caches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cache'])) {
            if (!empty($map['Cache'])) {
                $model->cache = [];
                $n            = 0;
                foreach ($map['Cache'] as $item) {
                    $model->cache[$n++] = null !== $item ? cache::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
