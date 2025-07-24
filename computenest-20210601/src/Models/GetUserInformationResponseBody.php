<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetUserInformationResponseBody\deliverySettings;
use AlibabaCloud\Tea\Model;

class GetUserInformationResponseBody extends Model
{
    /**
     * @description The delivery settings.
     *
     * @var deliverySettings
     */
    public $deliverySettings;

    /**
     * @description The request ID.
     *
     * @example 52EBAF16-22F6-53DB-AE1E-44764FC62AF0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliverySettings' => 'DeliverySettings',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverySettings) {
            $res['DeliverySettings'] = null !== $this->deliverySettings ? $this->deliverySettings->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserInformationResponseBody
     */
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
