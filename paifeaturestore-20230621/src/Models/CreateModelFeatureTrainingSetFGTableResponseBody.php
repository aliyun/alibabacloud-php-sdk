<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class CreateModelFeatureTrainingSetFGTableResponseBody extends Model
{
    /**
     * @example project_model_training_set_fg
     *
     * @var string
     */
    public $trainingSetFGTableName;

    /**
     * @example 93FF6A91-5326-5FA1-9D89-DB46DAA99E55
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'trainingSetFGTableName' => 'TrainingSetFGTableName',
        'requestId'              => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trainingSetFGTableName) {
            $res['TrainingSetFGTableName'] = $this->trainingSetFGTableName;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelFeatureTrainingSetFGTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrainingSetFGTableName'])) {
            $model->trainingSetFGTableName = $map['TrainingSetFGTableName'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
