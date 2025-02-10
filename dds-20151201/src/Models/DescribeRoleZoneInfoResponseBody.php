<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponseBody\zoneInfos;

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
        if (null !== $this->zoneInfos) {
            $this->zoneInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->zoneInfos) {
            $res['ZoneInfos'] = null !== $this->zoneInfos ? $this->zoneInfos->toArray($noStream) : $this->zoneInfos;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
