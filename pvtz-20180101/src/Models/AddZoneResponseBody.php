<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class AddZoneResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 46973D4C-E3E4-4ABA-9190-9A9DE406C7E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The global ID of the zone.
     *
     * @example AgIDE1MQ_151
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The name of the zone.
     *
     * @example example.com
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'zoneId'    => 'ZoneId',
        'zoneName'  => 'ZoneName',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddZoneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
