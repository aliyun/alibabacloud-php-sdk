<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class ActiveInteractionCreateRequest extends Model
{
    /**
     * @var string
     */
    public $image;
    protected $_name = [
        'image' => 'image',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['image'] = $this->image;
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
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        return $model;
    }
}
