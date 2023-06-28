<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubeOptimizationResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryCubeOptimizationResponseBody\result\cubePerformanceDiagnoseModel;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example OPENQUICKENGINE
     *
     * @var string
     */
    public $adviceType;

    /**
     * @var cubePerformanceDiagnoseModel
     */
    public $cubePerformanceDiagnoseModel;
    protected $_name = [
        'adviceType'                   => 'AdviceType',
        'cubePerformanceDiagnoseModel' => 'CubePerformanceDiagnoseModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceType) {
            $res['AdviceType'] = $this->adviceType;
        }
        if (null !== $this->cubePerformanceDiagnoseModel) {
            $res['CubePerformanceDiagnoseModel'] = null !== $this->cubePerformanceDiagnoseModel ? $this->cubePerformanceDiagnoseModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
