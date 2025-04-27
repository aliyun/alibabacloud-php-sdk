<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest;

use AlibabaCloud\Dara\Model;

class multiLanConfig extends Model
{
    /**
     * @var string
     */
    public $languages;
    protected $_name = [
        'languages' => 'Languages',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->languages) {
            $res['Languages'] = $this->languages;
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
        if (isset($map['Languages'])) {
            $model->languages = $map['Languages'];
        }

        return $model;
    }
}
