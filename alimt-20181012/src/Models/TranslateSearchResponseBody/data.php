<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateSearchResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $translated;
    protected $_name = [
        'translated' => 'Translated',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->translated) {
            $res['Translated'] = $this->translated;
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
        if (isset($map['Translated'])) {
            $model->translated = $map['Translated'];
        }

        return $model;
    }
}
