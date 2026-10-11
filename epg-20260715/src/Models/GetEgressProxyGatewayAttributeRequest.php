<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;

class GetEgressProxyGatewayAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $egressProxyGatewayId;
    protected $_name = [
        'egressProxyGatewayId' => 'EgressProxyGatewayId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyGatewayId) {
            $res['EgressProxyGatewayId'] = $this->egressProxyGatewayId;
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
        if (isset($map['EgressProxyGatewayId'])) {
            $model->egressProxyGatewayId = $map['EgressProxyGatewayId'];
        }

        return $model;
    }
}
