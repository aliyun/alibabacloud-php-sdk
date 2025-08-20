<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreatePrivateAccessApplicationRequest;

use AlibabaCloud\Dara\Model;

class portRanges extends Model
{
    /**
     * @var int
     */
    public $begin;

    /**
     * @var int
     */
    public $end;
    protected $_name = [
        'begin' => 'Begin',
        'end' => 'End',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->begin) {
            $res['Begin'] = $this->begin;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
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
        if (isset($map['Begin'])) {
            $model->begin = $map['Begin'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        return $model;
    }
}
