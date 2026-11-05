<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayDfpExtProcServiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $bound;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var int
     */
    public $servicePort;
    protected $_name = [
        'bound' => 'bound',
        'serviceId' => 'serviceId',
        'servicePort' => 'servicePort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bound) {
            $res['bound'] = $this->bound;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->servicePort) {
            $res['servicePort'] = $this->servicePort;
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
        if (isset($map['bound'])) {
            $model->bound = $map['bound'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['servicePort'])) {
            $model->servicePort = $map['servicePort'];
        }

        return $model;
    }
}
