<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceNews extends Model
{
    /**
     * @var int
     */
    public $date;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'date'        => 'date',
        'description' => 'description',
        'image'       => 'image',
        'link'        => 'link',
        'title'       => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceNews
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }
        if (isset($map['link'])) {
            $model->link = $map['link'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
