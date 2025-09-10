<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataResponseBody\responseStatus;

use AlibabaCloud\Dara\Model;

class statusItem extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'code' => 'code',
        'level' => 'level',
        'message' => 'message',
        'suggestion' => 'suggestion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->suggestion) {
            $res['suggestion'] = $this->suggestion;
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

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['suggestion'])) {
            $model->suggestion = $map['suggestion'];
        }

        return $model;
    }
}
