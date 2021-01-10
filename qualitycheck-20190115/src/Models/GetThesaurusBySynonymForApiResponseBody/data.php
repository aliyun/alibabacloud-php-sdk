<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiResponseBody\data\thesaurusPo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var thesaurusPo[]
     */
    public $thesaurusPo;
    protected $_name = [
        'thesaurusPo' => 'ThesaurusPo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->thesaurusPo) {
            $res['ThesaurusPo'] = [];
            if (null !== $this->thesaurusPo && \is_array($this->thesaurusPo)) {
                $n = 0;
                foreach ($this->thesaurusPo as $item) {
                    $res['ThesaurusPo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThesaurusPo'])) {
            if (!empty($map['ThesaurusPo'])) {
                $model->thesaurusPo = [];
                $n                  = 0;
                foreach ($map['ThesaurusPo'] as $item) {
                    $model->thesaurusPo[$n++] = null !== $item ? thesaurusPo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
