<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsResponseBody\resourceGroups\resourceGroup;

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
        if (\is_array($this->resourceGroup)) {
            Model::validateArray($this->resourceGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroup) {
            if (\is_array($this->resourceGroup)) {
                $res['ResourceGroup'] = [];
                $n1 = 0;
                foreach ($this->resourceGroup as $item1) {
                    $res['ResourceGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroup'])) {
            if (!empty($map['ResourceGroup'])) {
                $model->resourceGroup = [];
                $n1 = 0;
                foreach ($map['ResourceGroup'] as $item1) {
                    $model->resourceGroup[$n1] = resourceGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
