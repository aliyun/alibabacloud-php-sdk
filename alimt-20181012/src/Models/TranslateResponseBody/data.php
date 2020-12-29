<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $wordCount;

    /**
     * @var string
     */
    public $translated;
    protected $_name = [
        'wordCount'  => 'WordCount',
        'translated' => 'Translated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
        }
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
        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }
        if (isset($map['Translated'])) {
            $model->translated = $map['Translated'];
        }

        return $model;
    }
}
