<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The content of the tag.
     *
     * @example succeed in handling request
     *
     * @var string
     */
    public $msg;

    /**
     * @description The level of the tag.
     *
     * @example ""
     *
     * @var string
     */
    public $tagLevel;
    protected $_name = [
        'msg'      => 'msg',
        'tagLevel' => 'tagLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tags
     */
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
