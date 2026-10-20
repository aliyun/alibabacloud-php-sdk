<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSliderCaptchaPagesRequest;

use AlibabaCloud\Dara\Model;

class queryArgs extends Model
{
    /**
     * @var string
     */
    public $nameLike;
    protected $_name = [
        'nameLike' => 'NameLike',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nameLike) {
            $res['NameLike'] = $this->nameLike;
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
        if (isset($map['NameLike'])) {
            $model->nameLike = $map['NameLike'];
        }

        return $model;
    }
}
