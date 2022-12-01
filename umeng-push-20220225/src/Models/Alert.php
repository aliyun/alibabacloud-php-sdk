<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class Alert extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $subtitle;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'body'     => 'body',
        'subtitle' => 'subtitle',
        'title'    => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->subtitle) {
            $res['subtitle'] = $this->subtitle;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Alert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['subtitle'])) {
            $model->subtitle = $map['subtitle'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
