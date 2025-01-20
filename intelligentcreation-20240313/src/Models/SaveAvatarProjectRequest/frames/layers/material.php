<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SaveAvatarProjectRequest\frames\layers;

use AlibabaCloud\Dara\Model;

class material extends Model
{
    /**
     * @var string
     */
    public $format;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'format' => 'format',
        'id'     => 'id',
        'url'    => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
