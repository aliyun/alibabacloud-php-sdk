<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\CreateVirtualResourceRequest\resources;
use AlibabaCloud\Tea\Model;

class CreateVirtualResourceRequest extends Model
{
    /**
     * @description The list of resources in the virtual resource group.
     *
     * @var resources[]
     */
    public $resources;

    /**
     * @description The name of the virtual resource group. Default value: the ID of the virtual resource group.
     *
     * @example MyVirtualResource
     *
     * @var string
     */
    public $virtualResourceName;
    protected $_name = [
        'resources'           => 'Resources',
        'virtualResourceName' => 'VirtualResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->virtualResourceName) {
            $res['VirtualResourceName'] = $this->virtualResourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VirtualResourceName'])) {
            $model->virtualResourceName = $map['VirtualResourceName'];
        }

        return $model;
    }
}
