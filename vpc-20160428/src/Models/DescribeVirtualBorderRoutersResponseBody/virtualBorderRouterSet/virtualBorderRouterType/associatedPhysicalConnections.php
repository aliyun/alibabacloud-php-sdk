<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType\associatedPhysicalConnections\associatedPhysicalConnection;

class associatedPhysicalConnections extends Model
{
    /**
     * @var associatedPhysicalConnection[]
     */
    public $associatedPhysicalConnection;
    protected $_name = [
        'associatedPhysicalConnection' => 'AssociatedPhysicalConnection',
    ];

    public function validate()
    {
        if (\is_array($this->associatedPhysicalConnection)) {
            Model::validateArray($this->associatedPhysicalConnection);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedPhysicalConnection) {
            if (\is_array($this->associatedPhysicalConnection)) {
                $res['AssociatedPhysicalConnection'] = [];
                $n1 = 0;
                foreach ($this->associatedPhysicalConnection as $item1) {
                    $res['AssociatedPhysicalConnection'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssociatedPhysicalConnection'])) {
            if (!empty($map['AssociatedPhysicalConnection'])) {
                $model->associatedPhysicalConnection = [];
                $n1 = 0;
                foreach ($map['AssociatedPhysicalConnection'] as $item1) {
                    $model->associatedPhysicalConnection[$n1] = associatedPhysicalConnection::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
