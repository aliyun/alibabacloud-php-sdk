<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceTasksResponseBody\result;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $tagLevel;
    protected $_name = [
        'msg' => 'msg',
        'tagLevel' => 'tagLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }

        if (null !== $this->tagLevel) {
            $res['tagLevel'] = $this->tagLevel;
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
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }

        if (isset($map['tagLevel'])) {
            $model->tagLevel = $map['tagLevel'];
        }

        return $model;
    }
}
