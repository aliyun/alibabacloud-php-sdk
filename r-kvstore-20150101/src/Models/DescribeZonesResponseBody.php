<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponseBody\zones;
use AlibabaCloud\Tea\Model;

class DescribeZonesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1D42F072-72FE-4DC4-BB8E-64B1D298****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried zones.
     *
     * @var zones
     */
    public $zones;
    protected $_name = [
        'requestId' => 'RequestId',
        'zones' => 'Zones',
    ];

    public function validate() {}

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
