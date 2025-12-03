<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateCheckRunResponseBody\result;

use AlibabaCloud\Dara\Model;

class writer extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'id' => 'id',
        'logoUrl' => 'logoUrl',
        'name' => 'name',
        'slug' => 'slug',
        'type' => 'type',
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

        if (null !== $this->logoUrl) {
            $res['logoUrl'] = $this->logoUrl;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->slug) {
            $res['slug'] = $this->slug;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['logoUrl'])) {
            $model->logoUrl = $map['logoUrl'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['slug'])) {
            $model->slug = $map['slug'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
