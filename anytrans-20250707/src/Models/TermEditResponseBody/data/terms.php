<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermEditResponseBody\data;

use AlibabaCloud\Dara\Model;

class terms extends Model
{
    /**
     * @var string
     */
    public $src;

    /**
     * @var string
     */
    public $termId;

    /**
     * @var string
     */
    public $tgt;
    protected $_name = [
        'src' => 'src',
        'termId' => 'termId',
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

        if (null !== $this->termId) {
            $res['termId'] = $this->termId;
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

        if (isset($map['termId'])) {
            $model->termId = $map['termId'];
        }

        if (isset($map['tgt'])) {
            $model->tgt = $map['tgt'];
        }

        return $model;
    }
}
