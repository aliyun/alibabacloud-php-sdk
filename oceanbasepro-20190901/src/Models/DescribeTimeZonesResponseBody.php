<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTimeZonesResponseBody\timeZones;
use AlibabaCloud\Tea\Model;

class DescribeTimeZonesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time zones supported by the tenant.
     *
     * @var timeZones
     */
    public $timeZones;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeZones' => 'TimeZones',
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
        if (null !== $this->timeZones) {
            $res['TimeZones'] = null !== $this->timeZones ? $this->timeZones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTimeZonesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeZones'])) {
            $model->timeZones = timeZones::fromMap($map['TimeZones']);
        }

        return $model;
    }
}
