<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\GetSubTaskResultResponseBody\resultObject;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\GetSubTaskResultResponseBody\resultObject\file\col;

class file extends Model
{
    /**
     * @var col[]
     */
    public $col;

    /**
     * @var string[]
     */
    public $title;
    protected $_name = [
        'col' => 'Col',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->col)) {
            Model::validateArray($this->col);
        }
        if (\is_array($this->title)) {
            Model::validateArray($this->title);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->col) {
            if (\is_array($this->col)) {
                $res['Col'] = [];
                $n1 = 0;
                foreach ($this->col as $item1) {
                    $res['Col'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            if (\is_array($this->title)) {
                $res['Title'] = [];
                $n1 = 0;
                foreach ($this->title as $item1) {
                    $res['Title'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Col'])) {
            if (!empty($map['Col'])) {
                $model->col = [];
                $n1 = 0;
                foreach ($map['Col'] as $item1) {
                    $model->col[$n1] = col::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            if (!empty($map['Title'])) {
                $model->title = [];
                $n1 = 0;
                foreach ($map['Title'] as $item1) {
                    $model->title[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
