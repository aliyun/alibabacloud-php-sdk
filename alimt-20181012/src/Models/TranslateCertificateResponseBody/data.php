<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateResponseBody;

use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateResponseBody\data\translatedValues;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var translatedValues[]
     */
    public $translatedValues;
    protected $_name = [
        'translatedValues' => 'TranslatedValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->translatedValues) {
            $res['TranslatedValues'] = [];
            if (null !== $this->translatedValues && \is_array($this->translatedValues)) {
                $n = 0;
                foreach ($this->translatedValues as $item) {
                    $res['TranslatedValues'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TranslatedValues'])) {
            if (!empty($map['TranslatedValues'])) {
                $model->translatedValues = [];
                $n                       = 0;
                foreach ($map['TranslatedValues'] as $item) {
                    $model->translatedValues[$n++] = null !== $item ? translatedValues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
