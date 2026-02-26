<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DocumentParseQuestionOption extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var bool
     */
    public $extract;
    protected $_name = [
        'count' => 'Count',
        'extract' => 'Extract',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->extract) {
            $res['Extract'] = $this->extract;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Extract'])) {
            $model->extract = $map['Extract'];
        }

        return $model;
    }
}
