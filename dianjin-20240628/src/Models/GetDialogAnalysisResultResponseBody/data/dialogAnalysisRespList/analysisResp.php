<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data\dialogAnalysisRespList;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDialogAnalysisResultResponseBody\data\dialogAnalysisRespList\analysisResp\dialogLabels;
use AlibabaCloud\Tea\Model;

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

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogExecPlan) {
            $res['dialogExecPlan'] = $this->dialogExecPlan;
        }
        if (null !== $this->dialogLabels) {
            $res['dialogLabels'] = [];
            if (null !== $this->dialogLabels && \is_array($this->dialogLabels)) {
                $n = 0;
                foreach ($this->dialogLabels as $item) {
                    $res['dialogLabels'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return analysisResp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dialogExecPlan'])) {
            $model->dialogExecPlan = $map['dialogExecPlan'];
        }
        if (isset($map['dialogLabels'])) {
            if (!empty($map['dialogLabels'])) {
                $model->dialogLabels = [];
                $n = 0;
                foreach ($map['dialogLabels'] as $item) {
                    $model->dialogLabels[$n++] = null !== $item ? dialogLabels::fromMap($item) : $item;
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
