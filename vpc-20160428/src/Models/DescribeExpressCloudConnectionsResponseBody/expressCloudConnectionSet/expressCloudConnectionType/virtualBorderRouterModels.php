<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponseBody\expressCloudConnectionSet\expressCloudConnectionType;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponseBody\expressCloudConnectionSet\expressCloudConnectionType\virtualBorderRouterModels\virtualBorderRouterModel;
use AlibabaCloud\Tea\Model;

class virtualBorderRouterModels extends Model
{
    /**
     * @var virtualBorderRouterModel[]
     */
    public $virtualBorderRouterModel;
    protected $_name = [
        'virtualBorderRouterModel' => 'VirtualBorderRouterModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->virtualBorderRouterModel) {
            $res['VirtualBorderRouterModel'] = [];
            if (null !== $this->virtualBorderRouterModel && \is_array($this->virtualBorderRouterModel)) {
                $n = 0;
                foreach ($this->virtualBorderRouterModel as $item) {
                    $res['VirtualBorderRouterModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VirtualBorderRouterModel'])) {
            if (!empty($map['VirtualBorderRouterModel'])) {
                $model->virtualBorderRouterModel = [];
                $n                               = 0;
                foreach ($map['VirtualBorderRouterModel'] as $item) {
                    $model->virtualBorderRouterModel[$n++] = null !== $item ? virtualBorderRouterModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
