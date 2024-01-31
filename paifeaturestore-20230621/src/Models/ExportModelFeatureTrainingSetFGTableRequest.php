<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetFGTableRequest\trainingSetFgConfig;
use AlibabaCloud\Tea\Model;

class ExportModelFeatureTrainingSetFGTableRequest extends Model
{
    /**
     * @var trainingSetFgConfig
     */
    public $trainingSetFgConfig;
    protected $_name = [
        'trainingSetFgConfig' => 'TrainingSetFgConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trainingSetFgConfig) {
            $res['TrainingSetFgConfig'] = null !== $this->trainingSetFgConfig ? $this->trainingSetFgConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportModelFeatureTrainingSetFGTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrainingSetFgConfig'])) {
            $model->trainingSetFgConfig = trainingSetFgConfig::fromMap($map['TrainingSetFgConfig']);
        }

        return $model;
    }
}
