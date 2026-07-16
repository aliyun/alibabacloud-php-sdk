<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class AddChunkRequest extends Model
{
    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var mixed[]
     */
    public $field;
    protected $_name = [
        'pipelineId' => 'PipelineId',
        'dataId' => 'dataId',
        'field' => 'field',
    ];

    public function validate()
    {
        if (\is_array($this->field)) {
            Model::validateArray($this->field);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->dataId) {
            $res['dataId'] = $this->dataId;
        }

        if (null !== $this->field) {
            if (\is_array($this->field)) {
                $res['field'] = [];
                foreach ($this->field as $key1 => $value1) {
                    $res['field'][$key1] = $value1;
                }
            }
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
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['dataId'])) {
            $model->dataId = $map['dataId'];
        }

        if (isset($map['field'])) {
            if (!empty($map['field'])) {
                $model->field = [];
                foreach ($map['field'] as $key1 => $value1) {
                    $model->field[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
