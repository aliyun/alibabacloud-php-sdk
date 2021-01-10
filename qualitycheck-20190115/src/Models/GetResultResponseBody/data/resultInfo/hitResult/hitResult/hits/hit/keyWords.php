<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit\keyWords\keyWord;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyWord) {
            $res['KeyWord'] = [];
            if (null !== $this->keyWord && \is_array($this->keyWord)) {
                $n = 0;
                foreach ($this->keyWord as $item) {
                    $res['KeyWord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyWords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyWord'])) {
            if (!empty($map['KeyWord'])) {
                $model->keyWord = [];
                $n              = 0;
                foreach ($map['KeyWord'] as $item) {
                    $model->keyWord[$n++] = null !== $item ? keyWord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
