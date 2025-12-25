<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermQueryRequest;

use AlibabaCloud\Dara\Model;

class ext extends Model
{
    /**
     * @var mixed
     */
    public $paramMap;
    protected $_name = [
        'paramMap' => 'paramMap',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramMap) {
            $res['paramMap'] = $this->paramMap;
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
        if (isset($map['paramMap'])) {
            $model->paramMap = $map['paramMap'];
        }

        return $model;
    }
}
