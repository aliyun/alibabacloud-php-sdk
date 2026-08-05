<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateRagEvaluatorTaskRequest\data;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateRagEvaluatorTaskRequest\evaluateConfig;

class CreateRagEvaluatorTaskRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var mixed
     */
    public $dataSourceConfig;

    /**
     * @var string[]
     */
    public $emails;

    /**
     * @var evaluateConfig
     */
    public $evaluateConfig;

    /**
     * @var bool
     */
    public $hasDataSource;

    /**
     * @var mixed[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'appName' => 'app_name',
        'data' => 'data',
        'dataSourceConfig' => 'data_source_config',
        'emails' => 'emails',
        'evaluateConfig' => 'evaluate_config',
        'hasDataSource' => 'has_data_source',
        'metrics' => 'metrics',
        'taskName' => 'task_name',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->emails)) {
            Model::validateArray($this->emails);
        }
        if (null !== $this->evaluateConfig) {
            $this->evaluateConfig->validate();
        }
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['app_name'] = $this->appName;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceConfig) {
            $res['data_source_config'] = $this->dataSourceConfig;
        }

        if (null !== $this->emails) {
            if (\is_array($this->emails)) {
                $res['emails'] = [];
                $n1 = 0;
                foreach ($this->emails as $item1) {
                    $res['emails'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->evaluateConfig) {
            $res['evaluate_config'] = null !== $this->evaluateConfig ? $this->evaluateConfig->toArray($noStream) : $this->evaluateConfig;
        }

        if (null !== $this->hasDataSource) {
            $res['has_data_source'] = $this->hasDataSource;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['metrics'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskName) {
            $res['task_name'] = $this->taskName;
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
        if (isset($map['app_name'])) {
            $model->appName = $map['app_name'];
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['data_source_config'])) {
            $model->dataSourceConfig = $map['data_source_config'];
        }

        if (isset($map['emails'])) {
            if (!empty($map['emails'])) {
                $model->emails = [];
                $n1 = 0;
                foreach ($map['emails'] as $item1) {
                    $model->emails[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['evaluate_config'])) {
            $model->evaluateConfig = evaluateConfig::fromMap($map['evaluate_config']);
        }

        if (isset($map['has_data_source'])) {
            $model->hasDataSource = $map['has_data_source'];
        }

        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['metrics'] as $item1) {
                    $model->metrics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['task_name'])) {
            $model->taskName = $map['task_name'];
        }

        return $model;
    }
}
