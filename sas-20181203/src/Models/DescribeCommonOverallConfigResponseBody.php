<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigResponseBody\overallConfig;
use AlibabaCloud\Tea\Model;

class DescribeCommonOverallConfigResponseBody extends Model
{
    /**
     * @description The information about the feature.
     *
     * @var overallConfig
     */
    public $overallConfig;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 6D9CDB47-6191-4415-BE63-7E8B12CD4FBE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'overallConfig' => 'OverallConfig',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overallConfig) {
            $res['OverallConfig'] = null !== $this->overallConfig ? $this->overallConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommonOverallConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverallConfig'])) {
            $model->overallConfig = overallConfig::fromMap($map['OverallConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
