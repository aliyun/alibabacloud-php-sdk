<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\marketplaceMetadata\specificationMappings;
use AlibabaCloud\Tea\Model;

class marketplaceMetadata extends Model
{
    /**
     * @description The mappings between the service specifications and the template or package.
     *
     * @var specificationMappings[]
     */
    public $specificationMappings;
    protected $_name = [
        'specificationMappings' => 'SpecificationMappings',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->specificationMappings) {
            $res['SpecificationMappings'] = [];
            if (null !== $this->specificationMappings && \is_array($this->specificationMappings)) {
                $n = 0;
                foreach ($this->specificationMappings as $item) {
                    $res['SpecificationMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return marketplaceMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecificationMappings'])) {
            if (!empty($map['SpecificationMappings'])) {
                $model->specificationMappings = [];
                $n = 0;
                foreach ($map['SpecificationMappings'] as $item) {
                    $model->specificationMappings[$n++] = null !== $item ? specificationMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
