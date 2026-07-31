<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelGroupClientKeyItemDTO extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $keyPreview;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'id',
        'keyPreview' => 'keyPreview',
        'name' => 'name',
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

        if (null !== $this->keyPreview) {
            $res['keyPreview'] = $this->keyPreview;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (isset($map['keyPreview'])) {
            $model->keyPreview = $map['keyPreview'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
