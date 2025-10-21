<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class WatermarkSpec extends Model
{
    /**
     * @var string
     */
    public $column;

    /**
     * @var string
     */
    public $watermarkExpression;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'column' => 'column',
        'watermarkExpression' => 'watermarkExpression',
        'watermarkType' => 'watermarkType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            $res['column'] = $this->column;
        }

        if (null !== $this->watermarkExpression) {
            $res['watermarkExpression'] = $this->watermarkExpression;
        }

        if (null !== $this->watermarkType) {
            $res['watermarkType'] = $this->watermarkType;
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
        if (isset($map['column'])) {
            $model->column = $map['column'];
        }

        if (isset($map['watermarkExpression'])) {
            $model->watermarkExpression = $map['watermarkExpression'];
        }

        if (isset($map['watermarkType'])) {
            $model->watermarkType = $map['watermarkType'];
        }

        return $model;
    }
}
