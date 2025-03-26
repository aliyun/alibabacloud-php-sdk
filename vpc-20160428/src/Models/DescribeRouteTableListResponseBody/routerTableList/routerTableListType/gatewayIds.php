<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody\routerTableList\routerTableListType;

use AlibabaCloud\Dara\Model;

class gatewayIds extends Model
{
    /**
     * @var string[]
     */
    public $gatewayIds;
    protected $_name = [
        'gatewayIds' => 'GatewayIds',
    ];

    public function validate()
    {
        if (\is_array($this->gatewayIds)) {
            Model::validateArray($this->gatewayIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayIds) {
            if (\is_array($this->gatewayIds)) {
                $res['GatewayIds'] = [];
                $n1 = 0;
                foreach ($this->gatewayIds as $item1) {
                    $res['GatewayIds'][$n1++] = $item1;
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
        if (isset($map['GatewayIds'])) {
            if (!empty($map['GatewayIds'])) {
                $model->gatewayIds = [];
                $n1 = 0;
                foreach ($map['GatewayIds'] as $item1) {
                    $model->gatewayIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
