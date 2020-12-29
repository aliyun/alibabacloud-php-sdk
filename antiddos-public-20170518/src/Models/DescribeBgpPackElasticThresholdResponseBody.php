<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeBgpPackElasticThresholdResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxThreshold;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $openable;
    protected $_name = [
        'maxThreshold' => 'MaxThreshold',
        'requestId'    => 'RequestId',
        'openable'     => 'Openable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxThreshold) {
            $res['MaxThreshold'] = $this->maxThreshold;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->openable) {
            $res['Openable'] = $this->openable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBgpPackElasticThresholdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxThreshold'])) {
            $model->maxThreshold = $map['MaxThreshold'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Openable'])) {
            $model->openable = $map['Openable'];
        }

        return $model;
    }
}
