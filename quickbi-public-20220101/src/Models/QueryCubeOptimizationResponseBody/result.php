<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubeOptimizationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubeOptimizationResponseBody\result\cubePerformanceDiagnoseModel;

class result extends Model
{
    /**
     * @var string
     */
    public $adviceType;

    /**
     * @var cubePerformanceDiagnoseModel
     */
    public $cubePerformanceDiagnoseModel;
    protected $_name = [
        'adviceType' => 'AdviceType',
        'cubePerformanceDiagnoseModel' => 'CubePerformanceDiagnoseModel',
    ];

    public function validate()
    {
        if (null !== $this->cubePerformanceDiagnoseModel) {
            $this->cubePerformanceDiagnoseModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adviceType) {
            $res['AdviceType'] = $this->adviceType;
        }

        if (null !== $this->cubePerformanceDiagnoseModel) {
            $res['CubePerformanceDiagnoseModel'] = null !== $this->cubePerformanceDiagnoseModel ? $this->cubePerformanceDiagnoseModel->toArray($noStream) : $this->cubePerformanceDiagnoseModel;
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
        if (isset($map['AdviceType'])) {
            $model->adviceType = $map['AdviceType'];
        }

        if (isset($map['CubePerformanceDiagnoseModel'])) {
            $model->cubePerformanceDiagnoseModel = cubePerformanceDiagnoseModel::fromMap($map['CubePerformanceDiagnoseModel']);
        }

        return $model;
    }
}
