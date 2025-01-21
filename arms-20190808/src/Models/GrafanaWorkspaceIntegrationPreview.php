<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceIntegrationPreview extends Model
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $image;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $thumbnail;
    protected $_name = [
        'id'        => 'id',
        'image'     => 'image',
        'name'      => 'name',
        'thumbnail' => 'thumbnail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->thumbnail) {
            $res['thumbnail'] = $this->thumbnail;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['thumbnail'])) {
            $model->thumbnail = $map['thumbnail'];
        }

        return $model;
    }
}
