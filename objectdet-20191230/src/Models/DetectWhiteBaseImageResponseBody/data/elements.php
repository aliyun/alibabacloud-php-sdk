<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageResponseBody\data;

use AlibabaCloud\Dara\Model;

class elements extends Model
{
    /**
     * @var int
     */
    public $whiteBase;
    protected $_name = [
        'whiteBase' => 'WhiteBase',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteBase) {
            $res['WhiteBase'] = $this->whiteBase;
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
        if (isset($map['WhiteBase'])) {
            $model->whiteBase = $map['WhiteBase'];
        }

        return $model;
    }
}
