<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CancelFundAccountLowAvailableAmountAlarmResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @example DFC1F7F9-3BA9-BA4D-2F2E653
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'metadata' => 'Metadata',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelFundAccountLowAvailableAmountAlarmResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
