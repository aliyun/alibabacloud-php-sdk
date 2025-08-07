<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetUserInformationResponseBody\deliverySettings;

class GetUserInformationResponseBody extends Model
{
    /**
     * @var deliverySettings
     */
    public $deliverySettings;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliverySettings' => 'DeliverySettings',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deliverySettings) {
            $this->deliverySettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliverySettings) {
            $res['DeliverySettings'] = null !== $this->deliverySettings ? $this->deliverySettings->toArray($noStream) : $this->deliverySettings;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeliverySettings'])) {
            $model->deliverySettings = deliverySettings::fromMap($map['DeliverySettings']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
