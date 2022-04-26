<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets\audio;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mixing) {
            $res['Mixing'] = $this->mixing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterAudio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mixing'])) {
            $model->mixing = $map['Mixing'];
        }

        return $model;
    }
}
