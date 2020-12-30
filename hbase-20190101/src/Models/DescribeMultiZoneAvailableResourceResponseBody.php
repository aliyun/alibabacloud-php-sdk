<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones;
use AlibabaCloud\Tea\Model;

class DescribeMultiZoneAvailableResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var availableZones
     */
    public $availableZones;
    protected $_name = [
        'requestId'      => 'RequestId',
        'availableZones' => 'AvailableZones',
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
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = null !== $this->availableZones ? $this->availableZones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMultiZoneAvailableResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AvailableZones'])) {
            $model->availableZones = availableZones::fromMap($map['AvailableZones']);
        }

        return $model;
    }
}
