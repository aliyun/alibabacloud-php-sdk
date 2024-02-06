<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class bandWidthMonitorData extends Model
{
    /**
     * @description The outbound bandwidth. Unit: bit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $downBandWidth;

    /**
     * @description The Internet traffic to the instance. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $internetRX;

    /**
     * @description The Internet traffic from the instance. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $internetTX;

    /**
     * @description The timestamp when the monitoring data was queried. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-10-12T05:45:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The inbound bandwidth. Unit: bit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $upBandWidth;
    protected $_name = [
        'downBandWidth' => 'DownBandWidth',
        'internetRX'    => 'InternetRX',
        'internetTX'    => 'InternetTX',
        'timeStamp'     => 'TimeStamp',
        'upBandWidth'   => 'UpBandWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downBandWidth) {
            $res['DownBandWidth'] = $this->downBandWidth;
        }
        if (null !== $this->internetRX) {
            $res['InternetRX'] = $this->internetRX;
        }
        if (null !== $this->internetTX) {
            $res['InternetTX'] = $this->internetTX;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->upBandWidth) {
            $res['UpBandWidth'] = $this->upBandWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandWidthMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownBandWidth'])) {
            $model->downBandWidth = $map['DownBandWidth'];
        }
        if (isset($map['InternetRX'])) {
            $model->internetRX = $map['InternetRX'];
        }
        if (isset($map['InternetTX'])) {
            $model->internetTX = $map['InternetTX'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['UpBandWidth'])) {
            $model->upBandWidth = $map['UpBandWidth'];
        }

        return $model;
    }
}
