<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\audio;

use AlibabaCloud\Tea\Model;

class volume extends Model
{
    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'method' => 'Method',
        'level'  => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
