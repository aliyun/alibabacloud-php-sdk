<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteCORSRequest\corsJSON;

class UpdateGatewayRouteCORSRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var corsJSON
     */
    public $corsJSON;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'corsJSON' => 'CorsJSON',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id' => 'Id',
    ];

    public function validate()
    {
        if (null !== $this->corsJSON) {
            $this->corsJSON->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->corsJSON) {
            $res['CorsJSON'] = null !== $this->corsJSON ? $this->corsJSON->toArray($noStream) : $this->corsJSON;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (isset($map['CorsJSON'])) {
            $model->corsJSON = corsJSON::fromMap($map['CorsJSON']);
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
