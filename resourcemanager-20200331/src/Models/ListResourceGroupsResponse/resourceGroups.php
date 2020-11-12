<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsResponse;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsResponse\resourceGroups\resourceGroup;
use AlibabaCloud\Tea\Model;

class resourceGroups extends Model
{
    /**
     * @var resourceGroup[]
     */
    public $resourceGroup;
    protected $_name = [
        'resourceGroup' => 'ResourceGroup',
    ];

    public function validate()
    {
        Model::validateRequired('resourceGroup', $this->resourceGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = [];
            if (null !== $this->resourceGroup && \is_array($this->resourceGroup)) {
                $n = 0;
                foreach ($this->resourceGroup as $item) {
                    $res['ResourceGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroup'])) {
            if (!empty($map['ResourceGroup'])) {
                $model->resourceGroup = [];
                $n                    = 0;
                foreach ($map['ResourceGroup'] as $item) {
                    $model->resourceGroup[$n++] = null !== $item ? resourceGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
