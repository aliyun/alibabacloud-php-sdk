<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ConvertBandwidthPackageResponseBody extends Model
{
    /**
     * @var string
     */
    public $convertInstanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'convertInstanceId' => 'ConvertInstanceId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->convertInstanceId) {
            $res['ConvertInstanceId'] = $this->convertInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertBandwidthPackageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConvertInstanceId'])) {
            $model->convertInstanceId = $map['ConvertInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
