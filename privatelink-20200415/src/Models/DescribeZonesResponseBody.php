<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeZonesResponseBody\zones;
use AlibabaCloud\Tea\Model;

class DescribeZonesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned zones.
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
