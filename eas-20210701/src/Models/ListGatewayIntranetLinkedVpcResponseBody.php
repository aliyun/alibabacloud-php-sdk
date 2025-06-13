<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcResponseBody\intranetLinkedVpcList;

class ListGatewayIntranetLinkedVpcResponseBody extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var intranetLinkedVpcList[]
     */
    public $intranetLinkedVpcList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gatewayId' => 'GatewayId',
        'intranetLinkedVpcList' => 'IntranetLinkedVpcList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->intranetLinkedVpcList)) {
            Model::validateArray($this->intranetLinkedVpcList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->intranetLinkedVpcList) {
            if (\is_array($this->intranetLinkedVpcList)) {
                $res['IntranetLinkedVpcList'] = [];
                $n1 = 0;
                foreach ($this->intranetLinkedVpcList as $item1) {
                    $res['IntranetLinkedVpcList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['IntranetLinkedVpcList'])) {
            if (!empty($map['IntranetLinkedVpcList'])) {
                $model->intranetLinkedVpcList = [];
                $n1 = 0;
                foreach ($map['IntranetLinkedVpcList'] as $item1) {
                    $model->intranetLinkedVpcList[$n1] = intranetLinkedVpcList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
