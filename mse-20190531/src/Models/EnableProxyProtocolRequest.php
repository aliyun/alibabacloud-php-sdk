<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class EnableProxyProtocolRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $enableProxyProtocol;

    /**
     * @var string
     */
    public $gatewayUniqueId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'enableProxyProtocol' => 'EnableProxyProtocol',
        'gatewayUniqueId' => 'GatewayUniqueId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->enableProxyProtocol) {
            $res['EnableProxyProtocol'] = $this->enableProxyProtocol;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
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

        if (isset($map['EnableProxyProtocol'])) {
            $model->enableProxyProtocol = $map['EnableProxyProtocol'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        return $model;
    }
}
