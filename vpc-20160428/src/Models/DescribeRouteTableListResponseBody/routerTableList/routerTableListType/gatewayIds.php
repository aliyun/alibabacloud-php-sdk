<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody\routerTableList\routerTableListType;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayIds) {
            $res['GatewayIds'] = $this->gatewayIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayIds'])) {
            if (!empty($map['GatewayIds'])) {
                $model->gatewayIds = $map['GatewayIds'];
            }
        }

        return $model;
    }
}
