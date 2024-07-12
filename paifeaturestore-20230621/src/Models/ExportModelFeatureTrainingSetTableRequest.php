<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest\labelInputConfig;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest\trainingSetConfig;
use AlibabaCloud\Tea\Model;

class ExportModelFeatureTrainingSetTableRequest extends Model
{
    /**
     * @var FeatureViewConfigValue[]
     */
    public $featureViewConfig;

    /**
     * @var labelInputConfig
     */
    public $labelInputConfig;

    /**
     * @var int
     */
    public $realTimeIterateInterval;

    /**
     * @var trainingSetConfig
     */
    public $trainingSetConfig;
    protected $_name = [
        'featureViewConfig'       => 'FeatureViewConfig',
        'labelInputConfig'        => 'LabelInputConfig',
        'realTimeIterateInterval' => 'RealTimeIterateInterval',
        'trainingSetConfig'       => 'TrainingSetConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureViewConfig) {
            $res['FeatureViewConfig'] = [];
            if (null !== $this->featureViewConfig && \is_array($this->featureViewConfig)) {
                foreach ($this->featureViewConfig as $key => $val) {
                    $res['FeatureViewConfig'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->labelInputConfig) {
            $res['LabelInputConfig'] = null !== $this->labelInputConfig ? $this->labelInputConfig->toMap() : null;
        }
        if (null !== $this->realTimeIterateInterval) {
            $res['RealTimeIterateInterval'] = $this->realTimeIterateInterval;
        }
        if (null !== $this->trainingSetConfig) {
            $res['TrainingSetConfig'] = null !== $this->trainingSetConfig ? $this->trainingSetConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportModelFeatureTrainingSetTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureViewConfig'])) {
            $model->featureViewConfig = $map['FeatureViewConfig'];
        }
        if (isset($map['LabelInputConfig'])) {
            $model->labelInputConfig = labelInputConfig::fromMap($map['LabelInputConfig']);
        }
        if (isset($map['RealTimeIterateInterval'])) {
            $model->realTimeIterateInterval = $map['RealTimeIterateInterval'];
        }
        if (isset($map['TrainingSetConfig'])) {
            $model->trainingSetConfig = trainingSetConfig::fromMap($map['TrainingSetConfig']);
        }

        return $model;
    }
}
