<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitImageTranslateTaskRequest\ext;

use AlibabaCloud\Dara\Model;

class terminologies extends Model
{
    /**
     * @var string
     */
    public $src;

    /**
     * @var string
     */
    public $tgt;
    protected $_name = [
        'src' => 'src',
        'tgt' => 'tgt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->src) {
            $res['src'] = $this->src;
        }

        if (null !== $this->tgt) {
            $res['tgt'] = $this->tgt;
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
        if (isset($map['src'])) {
            $model->src = $map['src'];
        }

        if (isset($map['tgt'])) {
            $model->tgt = $map['tgt'];
        }

        return $model;
    }
}
