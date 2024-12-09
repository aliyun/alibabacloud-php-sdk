<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\cssMetadata\componentsMappings;
use AlibabaCloud\Tea\Model;

class cssMetadata extends Model
{
    /**
     * @description The mapping information about the billing items.
     *
     * @var componentsMappings[]
     */
    public $componentsMappings;
    protected $_name = [
        'componentsMappings' => 'ComponentsMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentsMappings) {
            $res['ComponentsMappings'] = [];
            if (null !== $this->componentsMappings && \is_array($this->componentsMappings)) {
                $n = 0;
                foreach ($this->componentsMappings as $item) {
                    $res['ComponentsMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cssMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentsMappings'])) {
            if (!empty($map['ComponentsMappings'])) {
                $model->componentsMappings = [];
                $n                         = 0;
                foreach ($map['ComponentsMappings'] as $item) {
                    $model->componentsMappings[$n++] = null !== $item ? componentsMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
