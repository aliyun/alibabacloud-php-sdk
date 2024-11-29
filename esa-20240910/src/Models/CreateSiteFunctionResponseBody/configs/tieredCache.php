<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs;

use AlibabaCloud\Tea\Model;

class tieredCache extends Model
{
    /**
     * @example edge_smart
     *
     * @var string
     */
    public $cacheArchitectureMode;

    /**
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @example 1
     *
     * @var string
     */
    public $sequence;
    protected $_name = [
        'cacheArchitectureMode' => 'CacheArchitectureMode',
        'configId'              => 'ConfigId',
        'sequence'              => 'Sequence',
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
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
