<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class GlobalPageItem extends Model
{
    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $snippet;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'link' => 'link',
        'snippet' => 'snippet',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }

        if (null !== $this->snippet) {
            $res['snippet'] = $this->snippet;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['link'])) {
            $model->link = $map['link'];
        }

        if (isset($map['snippet'])) {
            $model->snippet = $map['snippet'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
