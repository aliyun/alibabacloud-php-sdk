<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody\thresholds;
use AlibabaCloud\Tea\Model;

class DescribeDdosThresholdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var thresholds
     */
    public $thresholds;
    protected $_name = [
        'requestId'  => 'RequestId',
        'thresholds' => 'Thresholds',
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
        if (null !== $this->thresholds) {
            $res['Thresholds'] = null !== $this->thresholds ? $this->thresholds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosThresholdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Thresholds'])) {
            $model->thresholds = thresholds::fromMap($map['Thresholds']);
        }

        return $model;
    }
}
