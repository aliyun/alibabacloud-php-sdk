<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesRequest;

use AlibabaCloud\Dara\Model;

class queryArgs extends Model
{
    /**
     * @var string
     */
    public $nameDescriptionLike;
    protected $_name = [
        'nameDescriptionLike' => 'NameDescriptionLike',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nameDescriptionLike) {
            $res['NameDescriptionLike'] = $this->nameDescriptionLike;
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
        if (isset($map['NameDescriptionLike'])) {
            $model->nameDescriptionLike = $map['NameDescriptionLike'];
        }

        return $model;
    }
}
