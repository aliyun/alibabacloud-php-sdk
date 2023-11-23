<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest;

use AlibabaCloud\Tea\Model;

class multiLanConfig extends Model
{
    /**
     * @example eng,chn
     *
     * @var string
     */
    public $languages;
    protected $_name = [
        'languages' => 'Languages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->languages) {
            $res['Languages'] = $this->languages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiLanConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Languages'])) {
            $model->languages = $map['Languages'];
        }

        return $model;
    }
}
