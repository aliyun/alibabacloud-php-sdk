<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponse\monitorData\bandWidthMonitorData;
use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @var string
     */
    public $maxDownBandWidth;

    /**
     * @var string
     */
    public $maxUpBandWidth;

    /**
     * @var bandWidthMonitorData[]
     */
    public $bandWidthMonitorData;
    protected $_name = [
        'maxDownBandWidth'     => 'MaxDownBandWidth',
        'maxUpBandWidth'       => 'MaxUpBandWidth',
        'bandWidthMonitorData' => 'BandWidthMonitorData',
    ];

    public function validate()
    {
        Model::validateRequired('maxDownBandWidth', $this->maxDownBandWidth, true);
        Model::validateRequired('maxUpBandWidth', $this->maxUpBandWidth, true);
        Model::validateRequired('bandWidthMonitorData', $this->bandWidthMonitorData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxDownBandWidth) {
            $res['MaxDownBandWidth'] = $this->maxDownBandWidth;
        }
        if (null !== $this->maxUpBandWidth) {
            $res['MaxUpBandWidth'] = $this->maxUpBandWidth;
        }
        if (null !== $this->bandWidthMonitorData) {
            $res['BandWidthMonitorData'] = [];
            if (null !== $this->bandWidthMonitorData && \is_array($this->bandWidthMonitorData)) {
                $n = 0;
                foreach ($this->bandWidthMonitorData as $item) {
                    $res['BandWidthMonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['MaxDownBandWidth'])) {
            $model->maxDownBandWidth = $map['MaxDownBandWidth'];
        }
        if (isset($map['MaxUpBandWidth'])) {
            $model->maxUpBandWidth = $map['MaxUpBandWidth'];
        }
        if (isset($map['BandWidthMonitorData'])) {
            if (!empty($map['BandWidthMonitorData'])) {
                $model->bandWidthMonitorData = [];
                $n                           = 0;
                foreach ($map['BandWidthMonitorData'] as $item) {
                    $model->bandWidthMonitorData[$n++] = null !== $item ? bandWidthMonitorData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
