<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesRequest;

use AlibabaCloud\Tea\Model;

class queryArgs extends Model
{
    /**
     * @var string
     */
    public $nameDescriptionLike;
    protected $_name = [
        'nameDescriptionLike' => 'NameDescriptionLike',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameDescriptionLike) {
            $res['NameDescriptionLike'] = $this->nameDescriptionLike;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryArgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameDescriptionLike'])) {
            $model->nameDescriptionLike = $map['NameDescriptionLike'];
        }

        return $model;
    }
}
