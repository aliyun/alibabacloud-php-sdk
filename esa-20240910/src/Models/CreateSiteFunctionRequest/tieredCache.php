<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class tieredCache extends Model
{
    /**
     * @example edge_smart
     *
     * @var string
     */
    public $cacheArchitectureMode;
    protected $_name = [
        'cacheArchitectureMode' => 'CacheArchitectureMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheArchitectureMode) {
            $res['CacheArchitectureMode'] = $this->cacheArchitectureMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tieredCache
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheArchitectureMode'])) {
            $model->cacheArchitectureMode = $map['CacheArchitectureMode'];
        }

        return $model;
    }
}
