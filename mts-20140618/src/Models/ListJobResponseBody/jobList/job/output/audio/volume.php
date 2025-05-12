<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\audio;

use AlibabaCloud\Dara\Model;

class volume extends Model
{
    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $method;
    protected $_name = [
        'level' => 'Level',
        'method' => 'Method',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        return $model;
    }
}
