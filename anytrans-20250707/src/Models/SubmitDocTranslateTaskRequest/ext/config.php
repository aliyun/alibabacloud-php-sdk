<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskRequest\ext;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $skipImgTrans;
    protected $_name = [
        'skipImgTrans' => 'skipImgTrans',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skipImgTrans) {
            $res['skipImgTrans'] = $this->skipImgTrans;
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
        if (isset($map['skipImgTrans'])) {
            $model->skipImgTrans = $map['skipImgTrans'];
        }

        return $model;
    }
}
