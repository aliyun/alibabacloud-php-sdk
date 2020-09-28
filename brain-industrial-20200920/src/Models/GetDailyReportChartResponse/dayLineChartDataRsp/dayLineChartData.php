<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse\dayLineChartDataRsp;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse\dayLineChartDataRsp\dayLineChartData\bode;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse\dayLineChartDataRsp\dayLineChartData\closeLoop;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse\dayLineChartDataRsp\dayLineChartData\harris;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse\dayLineChartDataRsp\dayLineChartData\residualStage;
use AlibabaCloud\Tea\Model;

class dayLineChartData extends Model
{
    /**
     * @var harris[]
     */
    public $harris;

    /**
     * @var closeLoop[]
     */
    public $closeLoop;

    /**
     * @var bode[]
     */
    public $bode;

    /**
     * @var residualStage[]
     */
    public $residualStage;
    protected $_name = [
        'harris'        => 'Harris',
        'closeLoop'     => 'CloseLoop',
        'bode'          => 'Bode',
        'residualStage' => 'ResidualStage',
    ];

    public function validate()
    {
        Model::validateRequired('harris', $this->harris, true);
        Model::validateRequired('closeLoop', $this->closeLoop, true);
        Model::validateRequired('bode', $this->bode, true);
        Model::validateRequired('residualStage', $this->residualStage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->harris) {
            $res['Harris'] = [];
            if (null !== $this->harris && \is_array($this->harris)) {
                $n = 0;
                foreach ($this->harris as $item) {
                    $res['Harris'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->closeLoop) {
            $res['CloseLoop'] = [];
            if (null !== $this->closeLoop && \is_array($this->closeLoop)) {
                $n = 0;
                foreach ($this->closeLoop as $item) {
                    $res['CloseLoop'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bode) {
            $res['Bode'] = [];
            if (null !== $this->bode && \is_array($this->bode)) {
                $n = 0;
                foreach ($this->bode as $item) {
                    $res['Bode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->residualStage) {
            $res['ResidualStage'] = [];
            if (null !== $this->residualStage && \is_array($this->residualStage)) {
                $n = 0;
                foreach ($this->residualStage as $item) {
                    $res['ResidualStage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dayLineChartData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Harris'])) {
            if (!empty($map['Harris'])) {
                $model->harris = [];
                $n             = 0;
                foreach ($map['Harris'] as $item) {
                    $model->harris[$n++] = null !== $item ? harris::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CloseLoop'])) {
            if (!empty($map['CloseLoop'])) {
                $model->closeLoop = [];
                $n                = 0;
                foreach ($map['CloseLoop'] as $item) {
                    $model->closeLoop[$n++] = null !== $item ? closeLoop::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Bode'])) {
            if (!empty($map['Bode'])) {
                $model->bode = [];
                $n           = 0;
                foreach ($map['Bode'] as $item) {
                    $model->bode[$n++] = null !== $item ? bode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResidualStage'])) {
            if (!empty($map['ResidualStage'])) {
                $model->residualStage = [];
                $n                    = 0;
                foreach ($map['ResidualStage'] as $item) {
                    $model->residualStage[$n++] = null !== $item ? residualStage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
