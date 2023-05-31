<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody\vendors;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody\vendors\instanceTypes\instanceSubTypes;
use AlibabaCloud\Tea\Model;

class instanceTypes extends Model
{
    /**
     * @description An array that consists of asset subtypes.
     *
     * @var instanceSubTypes[]
     */
    public $instanceSubTypes;

    /**
     * @description The name of the asset type.
     *
     * @example ECS
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'instanceSubTypes' => 'InstanceSubTypes',
        'name'             => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSubTypes) {
            $res['InstanceSubTypes'] = [];
            if (null !== $this->instanceSubTypes && \is_array($this->instanceSubTypes)) {
                $n = 0;
                foreach ($this->instanceSubTypes as $item) {
                    $res['InstanceSubTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSubTypes'])) {
            if (!empty($map['InstanceSubTypes'])) {
                $model->instanceSubTypes = [];
                $n                       = 0;
                foreach ($map['InstanceSubTypes'] as $item) {
                    $model->instanceSubTypes[$n++] = null !== $item ? instanceSubTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
