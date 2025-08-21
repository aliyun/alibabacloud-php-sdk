<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docInfo\docParas;

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
        if (\is_array($this->docParas)) {
            Model::validateArray($this->docParas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docParas) {
            if (\is_array($this->docParas)) {
                $res['DocParas'] = [];
                $n1 = 0;
                foreach ($this->docParas as $item1) {
                    $res['DocParas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DocParas'])) {
            if (!empty($map['DocParas'])) {
                $model->docParas = [];
                $n1 = 0;
                foreach ($map['DocParas'] as $item1) {
                    $model->docParas[$n1] = docParas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
