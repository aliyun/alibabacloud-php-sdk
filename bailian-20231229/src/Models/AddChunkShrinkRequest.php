<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class AddChunkShrinkRequest extends Model
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
     * @var string
     */
    public $fieldShrink;
    protected $_name = [
        'pipelineId' => 'PipelineId',
        'dataId' => 'dataId',
        'fieldShrink' => 'field',
    ];

    public function validate()
    {
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

        if (null !== $this->fieldShrink) {
            $res['field'] = $this->fieldShrink;
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
            $model->fieldShrink = $map['field'];
        }

        return $model;
    }
}
