<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIDiffAnalysisRequest;

use AlibabaCloud\Tea\Model;

class task1 extends Model
{
    /**
     * @example 16896fa8-37f6-4c70-bb32-67fa9817d426
     *
     * @var string
     */
    public $analysisId;

    /**
     * @var string[]
     */
    public $pids;

    /**
     * @example 4660551334179.955
     *
     * @var float
     */
    public $stepEnd;

    /**
     * @example 4660550379415.497
     *
     * @var float
     */
    public $stepStart;
    protected $_name = [
        'analysisId' => 'analysisId',
        'pids' => 'pids',
        'stepEnd' => 'step_end',
        'stepStart' => 'step_start',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisId) {
            $res['analysisId'] = $this->analysisId;
        }
        if (null !== $this->pids) {
            $res['pids'] = $this->pids;
        }
        if (null !== $this->stepEnd) {
            $res['step_end'] = $this->stepEnd;
        }
        if (null !== $this->stepStart) {
            $res['step_start'] = $this->stepStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task1
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysisId'])) {
            $model->analysisId = $map['analysisId'];
        }
        if (isset($map['pids'])) {
            if (!empty($map['pids'])) {
                $model->pids = $map['pids'];
            }
        }
        if (isset($map['step_end'])) {
            $model->stepEnd = $map['step_end'];
        }
        if (isset($map['step_start'])) {
            $model->stepStart = $map['step_start'];
        }

        return $model;
    }
}
