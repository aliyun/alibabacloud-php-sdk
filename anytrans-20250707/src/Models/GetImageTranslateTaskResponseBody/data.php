<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation;

class data extends Model
{
    /**
     * @var string
     */
    public $traceId;

    /**
     * @var translation
     */
    public $translation;
    protected $_name = [
        'traceId' => 'traceId',
        'translation' => 'translation',
    ];

    public function validate()
    {
        if (null !== $this->translation) {
            $this->translation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        if (null !== $this->translation) {
            $res['translation'] = null !== $this->translation ? $this->translation->toArray($noStream) : $this->translation;
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
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        if (isset($map['translation'])) {
            $model->translation = translation::fromMap($map['translation']);
        }

        return $model;
    }
}
