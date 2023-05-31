<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody\vendors\instanceTypes;
use AlibabaCloud\Tea\Model;

class vendors extends Model
{
    /**
     * @description An array that consists of asset types.
     *
     * @var instanceTypes[]
     */
    public $instanceTypes;

    /**
     * @description The name of the service provider.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = [];
            if (null !== $this->instanceTypes && \is_array($this->instanceTypes)) {
                $n = 0;
                foreach ($this->instanceTypes as $item) {
                    $res['InstanceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return vendors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n                    = 0;
                foreach ($map['InstanceTypes'] as $item) {
                    $model->instanceTypes[$n++] = null !== $item ? instanceTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
