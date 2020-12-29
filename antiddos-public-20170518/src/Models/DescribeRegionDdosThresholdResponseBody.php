<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeRegionDdosThresholdResponseBody\regionDdosThreshold;
use AlibabaCloud\Tea\Model;

class DescribeRegionDdosThresholdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var regionDdosThreshold
     */
    public $regionDdosThreshold;
    protected $_name = [
        'requestId'           => 'RequestId',
        'regionDdosThreshold' => 'RegionDdosThreshold',
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
        if (null !== $this->regionDdosThreshold) {
            $res['RegionDdosThreshold'] = null !== $this->regionDdosThreshold ? $this->regionDdosThreshold->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionDdosThresholdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionDdosThreshold'])) {
            $model->regionDdosThreshold = regionDdosThreshold::fromMap($map['RegionDdosThreshold']);
        }

        return $model;
    }
}
