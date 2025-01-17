<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetServiceTrailResponseBody\serviceTrail;

class GetServiceTrailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var serviceTrail
     */
    public $serviceTrail;
    protected $_name = [
        'requestId'    => 'RequestId',
        'serviceTrail' => 'ServiceTrail',
    ];

    public function validate()
    {
        if (null !== $this->serviceTrail) {
            $this->serviceTrail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceTrail) {
            $res['ServiceTrail'] = null !== $this->serviceTrail ? $this->serviceTrail->toArray($noStream) : $this->serviceTrail;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceTrail'])) {
            $model->serviceTrail = serviceTrail::fromMap($map['ServiceTrail']);
        }

        return $model;
    }
}
