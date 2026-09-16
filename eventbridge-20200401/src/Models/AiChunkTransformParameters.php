<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AiChunkTransformParameters extends Model
{
    /**
     * @var string
     */
    public $chunkingType;

    /**
     * @var AiTransformField
     */
    public $inputField;

    /**
     * @var int
     */
    public $maxOverlapSize;

    /**
     * @var int
     */
    public $maxSegmentSize;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var bool
     */
    public $unpack;
    protected $_name = [
        'chunkingType' => 'ChunkingType',
        'inputField' => 'InputField',
        'maxOverlapSize' => 'MaxOverlapSize',
        'maxSegmentSize' => 'MaxSegmentSize',
        'stepName' => 'StepName',
        'unpack' => 'Unpack',
    ];

    public function validate()
    {
        if (null !== $this->inputField) {
            $this->inputField->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkingType) {
            $res['ChunkingType'] = $this->chunkingType;
        }

        if (null !== $this->inputField) {
            $res['InputField'] = null !== $this->inputField ? $this->inputField->toArray($noStream) : $this->inputField;
        }

        if (null !== $this->maxOverlapSize) {
            $res['MaxOverlapSize'] = $this->maxOverlapSize;
        }

        if (null !== $this->maxSegmentSize) {
            $res['MaxSegmentSize'] = $this->maxSegmentSize;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        if (null !== $this->unpack) {
            $res['Unpack'] = $this->unpack;
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
        if (isset($map['ChunkingType'])) {
            $model->chunkingType = $map['ChunkingType'];
        }

        if (isset($map['InputField'])) {
            $model->inputField = AiTransformField::fromMap($map['InputField']);
        }

        if (isset($map['MaxOverlapSize'])) {
            $model->maxOverlapSize = $map['MaxOverlapSize'];
        }

        if (isset($map['MaxSegmentSize'])) {
            $model->maxSegmentSize = $map['MaxSegmentSize'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        if (isset($map['Unpack'])) {
            $model->unpack = $map['Unpack'];
        }

        return $model;
    }
}
