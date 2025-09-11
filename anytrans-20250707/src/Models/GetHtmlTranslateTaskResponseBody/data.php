<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetHtmlTranslateTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetHtmlTranslateTaskResponseBody\data\usage;

class data extends Model
{
    /**
     * @var string
     */
    public $translation;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'translation' => 'translation',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->translation) {
            $res['translation'] = $this->translation;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['translation'])) {
            $model->translation = $map['translation'];
        }

        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
