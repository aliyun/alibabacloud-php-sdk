<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigResponseBody\overallConfig;
use AlibabaCloud\Tea\Model;

class DescribeCommonOverallConfigResponseBody extends Model
{
    /**
     * @var overallConfig
     */
    public $overallConfig;

    /**
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
