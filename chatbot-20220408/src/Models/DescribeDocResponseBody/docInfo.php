<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docInfo\docParas;
use AlibabaCloud\Tea\Model;

class docInfo extends Model
{
    /**
     * @var docParas[]
     */
    public $docParas;
    protected $_name = [
        'docParas' => 'DocParas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docParas) {
            $res['DocParas'] = [];
            if (null !== $this->docParas && \is_array($this->docParas)) {
                $n = 0;
                foreach ($this->docParas as $item) {
                    $res['DocParas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return docInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocParas'])) {
            if (!empty($map['DocParas'])) {
                $model->docParas = [];
                $n               = 0;
                foreach ($map['DocParas'] as $item) {
                    $model->docParas[$n++] = null !== $item ? docParas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
