<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttClientStatusResponseBody\clientStatus;
use AlibabaCloud\Tea\Model;

class DescribeMqttClientStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clientStatus
     */
    public $clientStatus;
    protected $_name = [
        'requestId'    => 'RequestId',
        'clientStatus' => 'ClientStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = null !== $this->clientStatus ? $this->clientStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMqttClientStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = clientStatus::fromMap($map['ClientStatus']);
        }

        return $model;
    }
}
