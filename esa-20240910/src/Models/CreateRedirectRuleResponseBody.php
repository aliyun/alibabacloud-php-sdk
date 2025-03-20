<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateRedirectRuleResponseBody extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 35281609698****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Request ID.
     *
     * @example 1FCB0DA6-9B6D-509D-B91C-B9B9F0780D0E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configId' => 'ConfigId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRedirectRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
