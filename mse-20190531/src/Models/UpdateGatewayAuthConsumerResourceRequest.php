<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayAuthConsumerResourceRequest\resourceList;

class UpdateGatewayAuthConsumerResourceRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var int
     */
    public $consumerId;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var resourceList[]
     */
    public $resourceList;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'consumerId'      => 'ConsumerId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'resourceList'    => 'ResourceList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->consumerId) {
            $res['ConsumerId'] = $this->consumerId;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['ResourceList'] = [];
                $n1                  = 0;
                foreach ($this->resourceList as $item1) {
                    $res['ResourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ConsumerId'])) {
            $model->consumerId = $map['ConsumerId'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n1                  = 0;
                foreach ($map['ResourceList'] as $item1) {
                    $model->resourceList[$n1++] = resourceList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
