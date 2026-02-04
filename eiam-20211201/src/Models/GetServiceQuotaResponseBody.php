<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetServiceQuotaResponseBody\serviceQuota;

class GetServiceQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceQuota
     */
    public $serviceQuota;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceQuota' => 'ServiceQuota',
    ];

    public function validate()
    {
        if (null !== $this->serviceQuota) {
            $this->serviceQuota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceQuota) {
            $res['ServiceQuota'] = null !== $this->serviceQuota ? $this->serviceQuota->toArray($noStream) : $this->serviceQuota;
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

        if (isset($map['ServiceQuota'])) {
            $model->serviceQuota = serviceQuota::fromMap($map['ServiceQuota']);
        }

        return $model;
    }
}
