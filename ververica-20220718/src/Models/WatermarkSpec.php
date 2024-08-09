<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'column'              => 'column',
        'watermarkExpression' => 'watermarkExpression',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['column'] = $this->column;
        }
        if (null !== $this->watermarkExpression) {
            $res['watermarkExpression'] = $this->watermarkExpression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WatermarkSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['column'])) {
            $model->column = $map['column'];
        }
        if (isset($map['watermarkExpression'])) {
            $model->watermarkExpression = $map['watermarkExpression'];
        }

        return $model;
    }
}
