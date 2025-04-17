<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\TargetAudio;

use AlibabaCloud\Dara\Model;

class filterAudio extends Model
{
    /**
     * @var bool
     */
    public $mixing;
    protected $_name = [
        'mixing' => 'Mixing',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mixing) {
            $res['Mixing'] = $this->mixing;
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
        if (isset($map['Mixing'])) {
            $model->mixing = $map['Mixing'];
        }

        return $model;
    }
}
