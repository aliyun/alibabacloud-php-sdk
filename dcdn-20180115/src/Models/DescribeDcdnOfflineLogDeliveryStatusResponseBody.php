<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnOfflineLogDeliveryStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $openStatus;
    protected $_name = [
        'requestId'  => 'RequestId',
        'openStatus' => 'OpenStatus',
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
        if (null !== $this->openStatus) {
            $res['OpenStatus'] = $this->openStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnOfflineLogDeliveryStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OpenStatus'])) {
            $model->openStatus = $map['OpenStatus'];
        }

        return $model;
    }
}
