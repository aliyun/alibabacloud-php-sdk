<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionInstanceRequest\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionInstanceRequest\usageParameters;
use AlibabaCloud\Tea\Model;

class CreateFunctionInstanceRequest extends Model
{
    /**
     * @description The parameters used to create the instance.
     *
     * @example [   { "name": "param1", "value": "val1"   } ]
     *
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @description The CRON expression used to schedule periodic training, in the format of Minutes Hours DayofMonth Month DayofWeek. The default value is empty, which specifies that no periodic training is performed. A value of 0 for DayofWeek specifies Sunday.
     *
     * @example 0 0 ? * 0,1,2,3,4,5,6
     *
     * @var string
     */
    public $cron;

    /**
     * @description The description.
     *
     * @example test instance
     *
     * @var string
     */
    public $description;

    /**
     * @description The feature type.
     *
     *   Default value: PAAS. Training is required before you can use the feature.
     *
     * @example PAAS
     *
     * @var string
     */
    public $functionType;

    /**
     * @description The instance name. The name must be 1 to 30 characters in length and can contain letters, digits, and underscores (_). The name is case-sensitive and must start with a letter.
     *
     * This parameter is required.
     * @example ctr_test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The model type. The value varies based on the model.
     *
     *   Click-through rate (CTR) model: tf_checkpoint
     *   Popularity model: pop
     *   Category model: offline_inference
     *   Hotword model: offline_inference
     *   Hint model: offline_inference
     *   Hotword model for real-time top searches: near_realtime
     *   Personalized hint model: near_realtime
     *   Drop-down suggestion model: offline_inference
     *   Tokenization model: text
     *   Term weight model: tf_checkpoint
     *   Synonym model: offline_inference
     *
     * This parameter is required.
     * @example tf_checkpoint
     *
     * @var string
     */
    public $modelType;

    /**
     * @description The parameters used to use the instance.
     *
     * @var usageParameters[]
     */
    public $usageParameters;
    protected $_name = [
        'createParameters' => 'createParameters',
        'cron'             => 'cron',
        'description'      => 'description',
        'functionType'     => 'functionType',
        'instanceName'     => 'instanceName',
        'modelType'        => 'modelType',
        'usageParameters'  => 'usageParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createParameters) {
            $res['createParameters'] = [];
            if (null !== $this->createParameters && \is_array($this->createParameters)) {
                $n = 0;
                foreach ($this->createParameters as $item) {
                    $res['createParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->functionType) {
            $res['functionType'] = $this->functionType;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }
        if (null !== $this->usageParameters) {
            $res['usageParameters'] = [];
            if (null !== $this->usageParameters && \is_array($this->usageParameters)) {
                $n = 0;
                foreach ($this->usageParameters as $item) {
                    $res['usageParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFunctionInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createParameters'])) {
            if (!empty($map['createParameters'])) {
                $model->createParameters = [];
                $n                       = 0;
                foreach ($map['createParameters'] as $item) {
                    $model->createParameters[$n++] = null !== $item ? createParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['functionType'])) {
            $model->functionType = $map['functionType'];
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }
        if (isset($map['usageParameters'])) {
            if (!empty($map['usageParameters'])) {
                $model->usageParameters = [];
                $n                      = 0;
                foreach ($map['usageParameters'] as $item) {
                    $model->usageParameters[$n++] = null !== $item ? usageParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
