<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponseBody\monitorData\bandWidthMonitorData;
use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @description The bandwidth data.
     *
     * @var bandWidthMonitorData[]
     */
    public $bandWidthMonitorData;

    /**
     * @description The maximum outbound bandwidth within the queried time range. Unit: bit/s.
     *
     * @example 16817468
     *
     * @var string
     */
    public $maxDownBandWidth;

    /**
     * @description The maximum inbound bandwidth within the queried time range. Unit: bit/s.
     *
     * @example 231008
     *
     * @var string
     */
    public $maxUpBandWidth;
    protected $_name = [
        'bandWidthMonitorData' => 'BandWidthMonitorData',
        'maxDownBandWidth' => 'MaxDownBandWidth',
        'maxUpBandWidth' => 'MaxUpBandWidth',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidthMonitorData) {
            $res['BandWidthMonitorData'] = [];
            if (null !== $this->bandWidthMonitorData && \is_array($this->bandWidthMonitorData)) {
                $n = 0;
                foreach ($this->bandWidthMonitorData as $item) {
                    $res['BandWidthMonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxDownBandWidth) {
            $res['MaxDownBandWidth'] = $this->maxDownBandWidth;
        }
        if (null !== $this->maxUpBandWidth) {
            $res['MaxUpBandWidth'] = $this->maxUpBandWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandWidthMonitorData'])) {
            if (!empty($map['BandWidthMonitorData'])) {
                $model->bandWidthMonitorData = [];
                $n = 0;
                foreach ($map['BandWidthMonitorData'] as $item) {
                    $model->bandWidthMonitorData[$n++] = null !== $item ? bandWidthMonitorData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxDownBandWidth'])) {
            $model->maxDownBandWidth = $map['MaxDownBandWidth'];
        }
        if (isset($map['MaxUpBandWidth'])) {
            $model->maxUpBandWidth = $map['MaxUpBandWidth'];
        }

        return $model;
    }
}
