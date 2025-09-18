<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest\labelInputConfig;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest\trainingSetConfig;

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
     * @var int
     */
    public $realTimePartitionCountValue;

    /**
     * @var trainingSetConfig
     */
    public $trainingSetConfig;
    protected $_name = [
        'featureViewConfig' => 'FeatureViewConfig',
        'labelInputConfig' => 'LabelInputConfig',
        'realTimeIterateInterval' => 'RealTimeIterateInterval',
        'realTimePartitionCountValue' => 'RealTimePartitionCountValue',
        'trainingSetConfig' => 'TrainingSetConfig',
    ];

    public function validate()
    {
        if (\is_array($this->featureViewConfig)) {
            Model::validateArray($this->featureViewConfig);
        }
        if (null !== $this->labelInputConfig) {
            $this->labelInputConfig->validate();
        }
        if (null !== $this->trainingSetConfig) {
            $this->trainingSetConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureViewConfig) {
            if (\is_array($this->featureViewConfig)) {
                $res['FeatureViewConfig'] = [];
                foreach ($this->featureViewConfig as $key1 => $value1) {
                    $res['FeatureViewConfig'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->labelInputConfig) {
            $res['LabelInputConfig'] = null !== $this->labelInputConfig ? $this->labelInputConfig->toArray($noStream) : $this->labelInputConfig;
        }

        if (null !== $this->realTimeIterateInterval) {
            $res['RealTimeIterateInterval'] = $this->realTimeIterateInterval;
        }

        if (null !== $this->realTimePartitionCountValue) {
            $res['RealTimePartitionCountValue'] = $this->realTimePartitionCountValue;
        }

        if (null !== $this->trainingSetConfig) {
            $res['TrainingSetConfig'] = null !== $this->trainingSetConfig ? $this->trainingSetConfig->toArray($noStream) : $this->trainingSetConfig;
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
        if (isset($map['FeatureViewConfig'])) {
            if (!empty($map['FeatureViewConfig'])) {
                $model->featureViewConfig = [];
                foreach ($map['FeatureViewConfig'] as $key1 => $value1) {
                    $model->featureViewConfig[$key1] = FeatureViewConfigValue::fromMap($value1);
                }
            }
        }

        if (isset($map['LabelInputConfig'])) {
            $model->labelInputConfig = labelInputConfig::fromMap($map['LabelInputConfig']);
        }

        if (isset($map['RealTimeIterateInterval'])) {
            $model->realTimeIterateInterval = $map['RealTimeIterateInterval'];
        }

        if (isset($map['RealTimePartitionCountValue'])) {
            $model->realTimePartitionCountValue = $map['RealTimePartitionCountValue'];
        }

        if (isset($map['TrainingSetConfig'])) {
            $model->trainingSetConfig = trainingSetConfig::fromMap($map['TrainingSetConfig']);
        }

        return $model;
    }
}
