<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesetsRequest;

use AlibabaCloud\Tea\Model;

class queryArgs extends Model
{
    /**
     * @example example
     *
     * @var string
     */
    public $anyLike;

    /**
     * @var bool
     */
    public $desc;

    /**
     * @example example
     *
     * @var string
     */
    public $nameLike;

    /**
     * @example id
     *
     * @var string
     */
    public $orderBy;
    protected $_name = [
        'anyLike'  => 'AnyLike',
        'desc'     => 'Desc',
        'nameLike' => 'NameLike',
        'orderBy'  => 'OrderBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anyLike) {
            $res['AnyLike'] = $this->anyLike;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->nameLike) {
            $res['NameLike'] = $this->nameLike;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
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
        if (isset($map['AnyLike'])) {
            $model->anyLike = $map['AnyLike'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['NameLike'])) {
            $model->nameLike = $map['NameLike'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        return $model;
    }
}
