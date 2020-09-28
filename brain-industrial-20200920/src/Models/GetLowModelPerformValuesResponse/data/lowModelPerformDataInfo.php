<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLowModelPerformValuesResponse\data;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLowModelPerformValuesResponse\data\lowModelPerformDataInfo\manualModel;
use AlibabaCloud\Tea\Model;

class lowModelPerformDataInfo extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var float
     */
    public $fitDegree;

    /**
     * @var manualModel
     */
    public $manualModel;
    protected $_name = [
        'confidence'  => 'Confidence',
        'fitDegree'   => 'FitDegree',
        'manualModel' => 'ManualModel',
    ];

    public function validate()
    {
        Model::validateRequired('confidence', $this->confidence, true);
        Model::validateRequired('fitDegree', $this->fitDegree, true);
        Model::validateRequired('manualModel', $this->manualModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->fitDegree) {
            $res['FitDegree'] = $this->fitDegree;
        }
        if (null !== $this->manualModel) {
            $res['ManualModel'] = null !== $this->manualModel ? $this->manualModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lowModelPerformDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['FitDegree'])) {
            $model->fitDegree = $map['FitDegree'];
        }
        if (isset($map['ManualModel'])) {
            $model->manualModel = manualModel::fromMap($map['ManualModel']);
        }

        return $model;
    }
}
