<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataResponseBody\monitorData\bandWidthMonitorData;

class monitorData extends Model
{
    /**
     * @var bandWidthMonitorData[]
     */
    public $bandWidthMonitorData;

    /**
     * @var int
     */
    public $maxDownBandWidth;

    /**
     * @var int
     */
    public $maxUpBandWidth;
    protected $_name = [
        'bandWidthMonitorData' => 'BandWidthMonitorData',
        'maxDownBandWidth' => 'MaxDownBandWidth',
        'maxUpBandWidth' => 'MaxUpBandWidth',
    ];

    public function validate()
    {
        if (\is_array($this->bandWidthMonitorData)) {
            Model::validateArray($this->bandWidthMonitorData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandWidthMonitorData) {
            if (\is_array($this->bandWidthMonitorData)) {
                $res['BandWidthMonitorData'] = [];
                $n1 = 0;
                foreach ($this->bandWidthMonitorData as $item1) {
                    $res['BandWidthMonitorData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandWidthMonitorData'])) {
            if (!empty($map['BandWidthMonitorData'])) {
                $model->bandWidthMonitorData = [];
                $n1 = 0;
                foreach ($map['BandWidthMonitorData'] as $item1) {
                    $model->bandWidthMonitorData[$n1] = bandWidthMonitorData::fromMap($item1);
                    ++$n1;
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
