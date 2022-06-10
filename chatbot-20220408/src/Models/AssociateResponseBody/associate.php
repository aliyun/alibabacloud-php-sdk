<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateResponseBody;

use AlibabaCloud\Tea\Model;

class associate extends Model
{
    /**
     * @description 附带信息
     *
     * @var string
     */
    public $meta;

    /**
     * @description 关联问题的标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'meta'  => 'Meta',
        'title' => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
