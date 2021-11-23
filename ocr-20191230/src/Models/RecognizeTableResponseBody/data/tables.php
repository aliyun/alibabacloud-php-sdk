<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables\tableRows;
use AlibabaCloud\Tea\Model;

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
        'head'      => 'Head',
        'tableRows' => 'TableRows',
        'tail'      => 'Tail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->head) {
            $res['Head'] = $this->head;
        }
        if (null !== $this->tableRows) {
            $res['TableRows'] = [];
            if (null !== $this->tableRows && \is_array($this->tableRows)) {
                $n = 0;
                foreach ($this->tableRows as $item) {
                    $res['TableRows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tail) {
            $res['Tail'] = $this->tail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Head'])) {
            if (!empty($map['Head'])) {
                $model->head = $map['Head'];
            }
        }
        if (isset($map['TableRows'])) {
            if (!empty($map['TableRows'])) {
                $model->tableRows = [];
                $n                = 0;
                foreach ($map['TableRows'] as $item) {
                    $model->tableRows[$n++] = null !== $item ? tableRows::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tail'])) {
            if (!empty($map['Tail'])) {
                $model->tail = $map['Tail'];
            }
        }

        return $model;
    }
}
