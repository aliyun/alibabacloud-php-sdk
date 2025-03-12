<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageStatisticsResponseBody extends Model
{
    /**
     * @description The number of container images in your assets. Only Container Registry Enterprise Edition instances are counted.
     *
     * @example 5
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 4E5BFDCF-B9DD-430D-9DA4-151BCB581C9D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of container images that have security risks. Only Container Registry Enterprise Edition instances are counted.
     *
     * @example 2
     *
     * @var int
     */
    public $riskInstanceCount;
    protected $_name = [
        'instanceCount'     => 'InstanceCount',
        'requestId'         => 'RequestId',
        'riskInstanceCount' => 'RiskInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskInstanceCount) {
            $res['RiskInstanceCount'] = $this->riskInstanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskInstanceCount'])) {
            $model->riskInstanceCount = $map['RiskInstanceCount'];
        }

        return $model;
    }
}
