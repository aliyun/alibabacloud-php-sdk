<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeLicensePlateResponseBody\data\plates;

class data extends Model
{
    /**
     * @var plates[]
     */
    public $plates;
    protected $_name = [
        'plates' => 'Plates',
    ];

    public function validate()
    {
        if (\is_array($this->plates)) {
            Model::validateArray($this->plates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->plates) {
            if (\is_array($this->plates)) {
                $res['Plates'] = [];
                $n1 = 0;
                foreach ($this->plates as $item1) {
                    $res['Plates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Plates'])) {
            if (!empty($map['Plates'])) {
                $model->plates = [];
                $n1 = 0;
                foreach ($map['Plates'] as $item1) {
                    $model->plates[$n1] = plates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
