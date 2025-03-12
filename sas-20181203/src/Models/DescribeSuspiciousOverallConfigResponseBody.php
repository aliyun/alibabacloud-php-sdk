<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousOverallConfigResponseBody\overallConfig;
use AlibabaCloud\Tea\Model;

class DescribeSuspiciousOverallConfigResponseBody extends Model
{
    /**
     * @description The configuration.
     *
     * @var overallConfig
     */
    public $overallConfig;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 6673D49C-A9AB-40DD-B4A2-B92306701AE7
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
     * @return DescribeSuspiciousOverallConfigResponseBody
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
