<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionQpsResponseBody\regionQps;
use AlibabaCloud\Tea\Model;

class DescribeRegionQpsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var regionQps
     */
    public $regionQps;
    protected $_name = [
        'requestId' => 'RequestId',
        'regionQps' => 'RegionQps',
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
        if (null !== $this->regionQps) {
            $res['RegionQps'] = null !== $this->regionQps ? $this->regionQps->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionQpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionQps'])) {
            $model->regionQps = regionQps::fromMap($map['RegionQps']);
        }

        return $model;
    }
}
