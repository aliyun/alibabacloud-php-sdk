<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoDetailResponseBody\questions;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $label;

    /**
     * @var bool
     */
    public $recommended;
    protected $_name = [
        'description' => 'description',
        'label' => 'label',
        'recommended' => 'recommended',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->recommended) {
            $res['recommended'] = $this->recommended;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['recommended'])) {
            $model->recommended = $map['recommended'];
        }

        return $model;
    }
}
