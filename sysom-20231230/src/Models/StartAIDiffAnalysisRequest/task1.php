<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\StartAIDiffAnalysisRequest;

use AlibabaCloud\Dara\Model;

class task1 extends Model
{
    /**
     * @var string
     */
    public $analysisId;

    /**
     * @var string[]
     */
    public $pids;

    /**
     * @var float
     */
    public $stepEnd;

    /**
     * @var float
     */
    public $stepStart;
    protected $_name = [
        'analysisId' => 'analysisId',
        'pids' => 'pids',
        'stepEnd' => 'step_end',
        'stepStart' => 'step_start',
    ];

    public function validate()
    {
        if (\is_array($this->pids)) {
            Model::validateArray($this->pids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisId) {
            $res['analysisId'] = $this->analysisId;
        }

        if (null !== $this->pids) {
            if (\is_array($this->pids)) {
                $res['pids'] = [];
                $n1 = 0;
                foreach ($this->pids as $item1) {
                    $res['pids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stepEnd) {
            $res['step_end'] = $this->stepEnd;
        }

        if (null !== $this->stepStart) {
            $res['step_start'] = $this->stepStart;
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
        if (isset($map['analysisId'])) {
            $model->analysisId = $map['analysisId'];
        }

        if (isset($map['pids'])) {
            if (!empty($map['pids'])) {
                $model->pids = [];
                $n1 = 0;
                foreach ($map['pids'] as $item1) {
                    $model->pids[$n1] = $item1;
                    ++$n1;
                }
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
