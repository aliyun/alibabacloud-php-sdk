<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DocumentParseNarratorOption extends Model
{
    /**
     * @var bool
     */
    public $narrate;
    protected $_name = [
        'narrate' => 'Narrate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->narrate) {
            $res['Narrate'] = $this->narrate;
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
        if (isset($map['Narrate'])) {
            $model->narrate = $map['Narrate'];
        }

        return $model;
    }
}
