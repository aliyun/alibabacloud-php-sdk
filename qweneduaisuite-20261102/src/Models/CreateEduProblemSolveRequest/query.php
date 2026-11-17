<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveRequest\query\image;

class query extends Model
{
    /**
     * @var image
     */
    public $image;
    protected $_name = [
        'image' => 'image',
    ];

    public function validate()
    {
        if (null !== $this->image) {
            $this->image->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
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
            $model->image = image::fromMap($map['image']);
        }

        return $model;
    }
}
