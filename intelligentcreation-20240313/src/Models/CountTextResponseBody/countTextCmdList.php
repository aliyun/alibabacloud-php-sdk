<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CountTextResponseBody;

use AlibabaCloud\Tea\Model;

class countTextCmdList extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $count;

    /**
     * @example RED_BOOK
     *
     * @var string
     */
    public $theme;
    protected $_name = [
        'count' => 'count',
        'theme' => 'theme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->theme) {
            $res['theme'] = $this->theme;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return countTextCmdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['theme'])) {
            $model->theme = $map['theme'];
        }

        return $model;
    }
}
