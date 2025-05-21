<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UndeployHttpApiRequest extends Model
{
    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $routeId;
    protected $_name = [
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'operationId' => 'operationId',
        'routeId' => 'routeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
        }

        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
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
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        return $model;
    }
}
