<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables\tableRows;

class tables extends Model
{
    /**
     * @var string[]
     */
    public $head;

    /**
     * @var tableRows[]
     */
    public $tableRows;

    /**
     * @var string[]
     */
    public $tail;
    protected $_name = [
        'head' => 'Head',
        'tableRows' => 'TableRows',
        'tail' => 'Tail',
    ];

    public function validate()
    {
        if (\is_array($this->head)) {
            Model::validateArray($this->head);
        }
        if (\is_array($this->tableRows)) {
            Model::validateArray($this->tableRows);
        }
        if (\is_array($this->tail)) {
            Model::validateArray($this->tail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->head) {
            if (\is_array($this->head)) {
                $res['Head'] = [];
                $n1 = 0;
                foreach ($this->head as $item1) {
                    $res['Head'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableRows) {
            if (\is_array($this->tableRows)) {
                $res['TableRows'] = [];
                $n1 = 0;
                foreach ($this->tableRows as $item1) {
                    $res['TableRows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tail) {
            if (\is_array($this->tail)) {
                $res['Tail'] = [];
                $n1 = 0;
                foreach ($this->tail as $item1) {
                    $res['Tail'][$n1] = $item1;
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
        if (isset($map['Head'])) {
            if (!empty($map['Head'])) {
                $model->head = [];
                $n1 = 0;
                foreach ($map['Head'] as $item1) {
                    $model->head[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TableRows'])) {
            if (!empty($map['TableRows'])) {
                $model->tableRows = [];
                $n1 = 0;
                foreach ($map['TableRows'] as $item1) {
                    $model->tableRows[$n1] = tableRows::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tail'])) {
            if (!empty($map['Tail'])) {
                $model->tail = [];
                $n1 = 0;
                foreach ($map['Tail'] as $item1) {
                    $model->tail[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
