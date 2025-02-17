<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data;

use AlibabaCloud\Dara\Model;

class sqlData extends Model
{
    /**
     * @var string[]
     */
    public $column;
    /**
     * @var mixed[][]
     */
    public $data;
    protected $_name = [
        'column' => 'column',
        'data'   => 'data',
    ];

    public function validate()
    {
        if (\is_array($this->column)) {
            Model::validateArray($this->column);
        }
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            if (\is_array($this->column)) {
                $res['column'] = [];
                $n1            = 0;
                foreach ($this->column as $item1) {
                    $res['column'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1          = 0;
                foreach ($this->data as $item1) {
                    if (\is_array($item1)) {
                        $res['data'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['data'][$n1++][$key2] = $value2;
                        }
                    }
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
        if (isset($map['column'])) {
            if (!empty($map['column'])) {
                $model->column = [];
                $n1            = 0;
                foreach ($map['column'] as $item1) {
                    $model->column[$n1++] = $item1;
                }
            }
        }

        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1          = 0;
                foreach ($map['data'] as $item1) {
                    if (!empty($item1)) {
                        $model->data[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->data[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
