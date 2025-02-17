<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

class availableResources extends Model
{
    /**
     * @var resourcesInfo[]
     */
    public $resourcesInfo;
    protected $_name = [
        'resourcesInfo' => 'ResourcesInfo',
    ];

    public function validate()
    {
        if (\is_array($this->resourcesInfo)) {
            Model::validateArray($this->resourcesInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourcesInfo) {
            if (\is_array($this->resourcesInfo)) {
                $res['ResourcesInfo'] = [];
                $n1                   = 0;
                foreach ($this->resourcesInfo as $item1) {
                    $res['ResourcesInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourcesInfo'])) {
            if (!empty($map['ResourcesInfo'])) {
                $model->resourcesInfo = [];
                $n1                   = 0;
                foreach ($map['ResourcesInfo'] as $item1) {
                    $model->resourcesInfo[$n1++] = resourcesInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
