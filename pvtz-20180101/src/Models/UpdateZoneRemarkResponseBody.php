<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class UpdateZoneRemarkResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example C6F1D541-E7A6-447A-A2B5-9F7A20B2A8FB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The zone ID.
     *
     * @example AgIDE1MA_149
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'requestId' => 'RequestId',
        'zoneId'    => 'ZoneId',
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateZoneRemarkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
