<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcResponseBody\intranetLinkedVpcList;
use AlibabaCloud\Tea\Model;

class ListGatewayIntranetLinkedVpcResponseBody extends Model
{
    /**
     * @example gw-1uhcqmsc7x22******
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var intranetLinkedVpcList[]
     */
    public $intranetLinkedVpcList;

    /**
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gatewayId'             => 'GatewayId',
        'intranetLinkedVpcList' => 'IntranetLinkedVpcList',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->intranetLinkedVpcList) {
            $res['IntranetLinkedVpcList'] = [];
            if (null !== $this->intranetLinkedVpcList && \is_array($this->intranetLinkedVpcList)) {
                $n = 0;
                foreach ($this->intranetLinkedVpcList as $item) {
                    $res['IntranetLinkedVpcList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGatewayIntranetLinkedVpcResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IntranetLinkedVpcList'])) {
            if (!empty($map['IntranetLinkedVpcList'])) {
                $model->intranetLinkedVpcList = [];
                $n                            = 0;
                foreach ($map['IntranetLinkedVpcList'] as $item) {
                    $model->intranetLinkedVpcList[$n++] = null !== $item ? intranetLinkedVpcList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
