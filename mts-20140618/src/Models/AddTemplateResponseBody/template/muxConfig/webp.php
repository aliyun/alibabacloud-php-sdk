<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\muxConfig;

use AlibabaCloud\Dara\Model;

class webp extends Model
{
    /**
     * @var string
     */
    public $loop;
    protected $_name = [
        'loop' => 'Loop',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loop) {
            $res['Loop'] = $this->loop;
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
        if (isset($map['Loop'])) {
            $model->loop = $map['Loop'];
        }

        return $model;
    }
}
