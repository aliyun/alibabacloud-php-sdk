<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryMediaListByURLResponseBody\mediaList\media\mediaInfo\streams\subtitleStreamList;

use AlibabaCloud\Tea\Model;

class subtitleStream extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'index' => 'Index',
        'lang'  => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subtitleStream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
