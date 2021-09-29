<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeMqttClientStatusResponseBody\clientStatus;
use AlibabaCloud\Tea\Model;

class DescribeMqttClientStatusResponseBody extends Model
{
    /**
     * @var clientStatus
     */
    public $clientStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientStatus' => 'ClientStatus',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = null !== $this->clientStatus ? $this->clientStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = clientStatus::fromMap($map['ClientStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
