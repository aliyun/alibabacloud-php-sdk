<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData;

use AlibabaCloud\Tea\Model;

class operationRate extends Model
{
    /**
     * @var string
     */
    public $average;

    /**
     * @var string
     */
    public $best;

    /**
     * @var string
     */
    public $worst;
    protected $_name = [
        'average' => 'Average',
        'best'    => 'Best',
        'worst'   => 'Worst',
    ];

    public function validate()
    {
        Model::validateRequired('average', $this->average, true);
        Model::validateRequired('best', $this->best, true);
        Model::validateRequired('worst', $this->worst, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }
        if (null !== $this->best) {
            $res['Best'] = $this->best;
        }
        if (null !== $this->worst) {
            $res['Worst'] = $this->worst;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationRate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }
        if (isset($map['Best'])) {
            $model->best = $map['Best'];
        }
        if (isset($map['Worst'])) {
            $model->worst = $map['Worst'];
        }

        return $model;
    }
}
