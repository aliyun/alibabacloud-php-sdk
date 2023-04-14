<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotAssociateResponseBody\data;

use AlibabaCloud\Tea\Model;

class associate extends Model
{
    /**
     * @description The additional information.
     *
     * @example {}
     *
     * @var string
     */
    public $meta;

    /**
     * @description The title of the associated question.
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
