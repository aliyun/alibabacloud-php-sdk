<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit\keyWords\keyWord;

class keyWords extends Model
{
    /**
     * @var keyWord[]
     */
    public $keyWord;
    protected $_name = [
        'keyWord' => 'KeyWord',
    ];

    public function validate()
    {
        if (\is_array($this->keyWord)) {
            Model::validateArray($this->keyWord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyWord) {
            if (\is_array($this->keyWord)) {
                $res['KeyWord'] = [];
                $n1 = 0;
                foreach ($this->keyWord as $item1) {
                    $res['KeyWord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KeyWord'])) {
            if (!empty($map['KeyWord'])) {
                $model->keyWord = [];
                $n1 = 0;
                foreach ($map['KeyWord'] as $item1) {
                    $model->keyWord[$n1++] = keyWord::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
