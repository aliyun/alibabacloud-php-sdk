<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeEssdCacheConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableEssdCache;

    /**
     * @example 500
     *
     * @var int
     */
    public $essdCacheSize;
    protected $_name = [
        'enableEssdCache' => 'EnableEssdCache',
        'essdCacheSize'   => 'EssdCacheSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableEssdCache) {
            $res['EnableEssdCache'] = $this->enableEssdCache;
        }
        if (null !== $this->essdCacheSize) {
            $res['EssdCacheSize'] = $this->essdCacheSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableEssdCache'])) {
            $model->enableEssdCache = $map['EnableEssdCache'];
        }
        if (isset($map['EssdCacheSize'])) {
            $model->essdCacheSize = $map['EssdCacheSize'];
        }

        return $model;
    }
}
