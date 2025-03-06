<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponseBody\systemParams;
use AlibabaCloud\Tea\Model;

class DescribeSystemParametersResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0CCDF65E-6050-412D-AD68-FA3D9196836C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned information about system parameters. It is an array that consists of SystemParam data.
     *
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
     * @return DescribeSystemParametersResponseBody
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
