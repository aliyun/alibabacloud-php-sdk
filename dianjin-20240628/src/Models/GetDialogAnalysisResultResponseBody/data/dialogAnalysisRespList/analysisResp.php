<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data\dialogAnalysisRespList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data\dialogAnalysisRespList\analysisResp\dialogLabels;

class analysisResp extends Model
{
    /**
     * @var string
     */
    public $dialogExecPlan;

    /**
     * @var dialogLabels[]
     */
    public $dialogLabels;

    /**
     * @var string
     */
    public $dialogSop;

    /**
     * @var string
     */
    public $dialogSummary;
    protected $_name = [
        'dialogExecPlan' => 'dialogExecPlan',
        'dialogLabels' => 'dialogLabels',
        'dialogSop' => 'dialogSop',
        'dialogSummary' => 'dialogSummary',
    ];

    public function validate()
    {
        if (\is_array($this->dialogLabels)) {
            Model::validateArray($this->dialogLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogExecPlan) {
            $res['dialogExecPlan'] = $this->dialogExecPlan;
        }

        if (null !== $this->dialogLabels) {
            if (\is_array($this->dialogLabels)) {
                $res['dialogLabels'] = [];
                $n1 = 0;
                foreach ($this->dialogLabels as $item1) {
                    $res['dialogLabels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dialogSop) {
            $res['dialogSop'] = $this->dialogSop;
        }

        if (null !== $this->dialogSummary) {
            $res['dialogSummary'] = $this->dialogSummary;
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
        if (isset($map['dialogExecPlan'])) {
            $model->dialogExecPlan = $map['dialogExecPlan'];
        }

        if (isset($map['dialogLabels'])) {
            if (!empty($map['dialogLabels'])) {
                $model->dialogLabels = [];
                $n1 = 0;
                foreach ($map['dialogLabels'] as $item1) {
                    $model->dialogLabels[$n1++] = dialogLabels::fromMap($item1);
                }
            }
        }

        if (isset($map['dialogSop'])) {
            $model->dialogSop = $map['dialogSop'];
        }

        if (isset($map['dialogSummary'])) {
            $model->dialogSummary = $map['dialogSummary'];
        }

        return $model;
    }
}
