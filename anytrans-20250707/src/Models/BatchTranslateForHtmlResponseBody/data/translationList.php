<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateForHtmlResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateForHtmlResponseBody\data\translationList\usage;

class translationList extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $translation;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'code' => 'code',
        'index' => 'index',
        'message' => 'message',
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
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['translation'])) {
            $model->translation = $map['translation'];
        }

        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
