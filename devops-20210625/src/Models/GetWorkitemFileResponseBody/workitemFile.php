<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemFileResponseBody;

use AlibabaCloud\Dara\Model;

class workitemFile extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $suffix;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'id' => 'id',
        'name' => 'name',
        'size' => 'size',
        'suffix' => 'suffix',
        'url' => 'url',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->suffix) {
            $res['suffix'] = $this->suffix;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['suffix'])) {
            $model->suffix = $map['suffix'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
