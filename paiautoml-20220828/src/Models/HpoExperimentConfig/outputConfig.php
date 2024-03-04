<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\Tea\Model;

class outputConfig extends Model
{
    /**
     * @var string
     */
    public $modelPath;

    /**
     * @var string
     */
    public $summaryPath;
    protected $_name = [
        'modelPath'   => 'model_path',
        'summaryPath' => 'summary_path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelPath) {
            $res['model_path'] = $this->modelPath;
        }
        if (null !== $this->summaryPath) {
            $res['summary_path'] = $this->summaryPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['model_path'])) {
            $model->modelPath = $map['model_path'];
        }
        if (isset($map['summary_path'])) {
            $model->summaryPath = $map['summary_path'];
        }

        return $model;
    }
}
