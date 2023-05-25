<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeZonesResponseBody\zones;
use AlibabaCloud\Tea\Model;

class DescribeZonesResponseBody extends Model
{
    /**
     * @example 9324B68F-9863-5722-A0FD-0798E2B02A0E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {\"Zone\": [{\"ZoneId\": \"cn-hangzhou-i\"}]}
     *
     * @var zones
     */
    public $zones;
    protected $_name = [
        'requestId' => 'RequestId',
        'zones'     => 'Zones',
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
        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeZonesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }

        return $model;
    }
}
