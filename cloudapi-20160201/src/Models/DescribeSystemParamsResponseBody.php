<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSystemParamsResponseBody\systemParams;
use AlibabaCloud\Tea\Model;

class DescribeSystemParamsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var systemParams
     */
    public $systemParams;
    protected $_name = [
        'requestId'    => 'RequestId',
        'systemParams' => 'SystemParams',
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
        if (null !== $this->systemParams) {
            $res['SystemParams'] = null !== $this->systemParams ? $this->systemParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSystemParamsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemParams'])) {
            $model->systemParams = systemParams::fromMap($map['SystemParams']);
        }

        return $model;
    }
}
