<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class networkAttributes extends Model
{
    /**
     * @var int
     */
    public $peakBandwidth;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $publicIpAddress;

    /**
     * @var string
     */
    public $publicIpDdosStatus;
    protected $_name = [
        'peakBandwidth' => 'PeakBandwidth',
        'privateIpAddress' => 'PrivateIpAddress',
        'publicIpAddress' => 'PublicIpAddress',
        'publicIpDdosStatus' => 'PublicIpDdosStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakBandwidth) {
            $res['PeakBandwidth'] = $this->peakBandwidth;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->publicIpDdosStatus) {
            $res['PublicIpDdosStatus'] = $this->publicIpDdosStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakBandwidth'])) {
            $model->peakBandwidth = $map['PeakBandwidth'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['PublicIpDdosStatus'])) {
            $model->publicIpDdosStatus = $map['PublicIpDdosStatus'];
        }

        return $model;
    }
}
