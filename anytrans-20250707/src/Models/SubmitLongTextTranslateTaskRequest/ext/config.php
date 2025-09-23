<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitLongTextTranslateTaskRequest\ext;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $skipCsiCheck;
    protected $_name = [
        'skipCsiCheck' => 'skipCsiCheck',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skipCsiCheck) {
            $res['skipCsiCheck'] = $this->skipCsiCheck;
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
        if (isset($map['skipCsiCheck'])) {
            $model->skipCsiCheck = $map['skipCsiCheck'];
        }

        return $model;
    }
}
