<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateCertificateResponseBody\data\translatedValues;

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
        if (\is_array($this->translatedValues)) {
            Model::validateArray($this->translatedValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->translatedValues) {
            if (\is_array($this->translatedValues)) {
                $res['TranslatedValues'] = [];
                $n1 = 0;
                foreach ($this->translatedValues as $item1) {
                    $res['TranslatedValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TranslatedValues'])) {
            if (!empty($map['TranslatedValues'])) {
                $model->translatedValues = [];
                $n1 = 0;
                foreach ($map['TranslatedValues'] as $item1) {
                    $model->translatedValues[$n1++] = translatedValues::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
