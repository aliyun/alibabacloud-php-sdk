<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DeleteZoneResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example E246E023-F2EB-4034-83F7-B13FCF31459C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The global ID of the zone.
     *
     * @example AgIDE1MA_150
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
     * @return DeleteZoneResponseBody
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
