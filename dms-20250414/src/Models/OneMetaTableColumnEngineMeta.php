<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OneMetaTableColumnEngineMeta extends Model
{
    /**
     * @var bool
     */
    public $autoIncrement;

    /**
     * @var int
     */
    public $dataLength;

    /**
     * @var int
     */
    public $dataPrecision;

    /**
     * @var int
     */
    public $dataScale;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var bool
     */
    public $generationColumn;

    /**
     * @var string
     */
    public $generationExpression;

    /**
     * @var bool
     */
    public $nullable;
    protected $_name = [
        'autoIncrement' => 'AutoIncrement',
        'dataLength' => 'DataLength',
        'dataPrecision' => 'DataPrecision',
        'dataScale' => 'DataScale',
        'defaultValue' => 'DefaultValue',
        'encoding' => 'Encoding',
        'extra' => 'Extra',
        'generationColumn' => 'GenerationColumn',
        'generationExpression' => 'GenerationExpression',
        'nullable' => 'Nullable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoIncrement) {
            $res['AutoIncrement'] = $this->autoIncrement;
        }

        if (null !== $this->dataLength) {
            $res['DataLength'] = $this->dataLength;
        }

        if (null !== $this->dataPrecision) {
            $res['DataPrecision'] = $this->dataPrecision;
        }

        if (null !== $this->dataScale) {
            $res['DataScale'] = $this->dataScale;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }

        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->generationColumn) {
            $res['GenerationColumn'] = $this->generationColumn;
        }

        if (null !== $this->generationExpression) {
            $res['GenerationExpression'] = $this->generationExpression;
        }

        if (null !== $this->nullable) {
            $res['Nullable'] = $this->nullable;
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
        if (isset($map['AutoIncrement'])) {
            $model->autoIncrement = $map['AutoIncrement'];
        }

        if (isset($map['DataLength'])) {
            $model->dataLength = $map['DataLength'];
        }

        if (isset($map['DataPrecision'])) {
            $model->dataPrecision = $map['DataPrecision'];
        }

        if (isset($map['DataScale'])) {
            $model->dataScale = $map['DataScale'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }

        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['GenerationColumn'])) {
            $model->generationColumn = $map['GenerationColumn'];
        }

        if (isset($map['GenerationExpression'])) {
            $model->generationExpression = $map['GenerationExpression'];
        }

        if (isset($map['Nullable'])) {
            $model->nullable = $map['Nullable'];
        }

        return $model;
    }
}
