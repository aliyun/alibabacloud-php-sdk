<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponseBody\zoneInfos;
use AlibabaCloud\Tea\Model;

class DescribeRoleZoneInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var zoneInfos
     */
    public $zoneInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'zoneInfos' => 'ZoneInfos',
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
        if (null !== $this->zoneInfos) {
            $res['ZoneInfos'] = null !== $this->zoneInfos ? $this->zoneInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRoleZoneInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneInfos'])) {
            $model->zoneInfos = zoneInfos::fromMap($map['ZoneInfos']);
        }

        return $model;
    }
}
